<?php
namespace Antiphp\Codemonkey\Generator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this->setName('generate');
        $this->addArgument(
            'config-file',
            InputArgument::REQUIRED
        );
        $this->addArgument(
            'output-dir',
            InputArgument::OPTIONAL,
            '',
            __DIR__ . '/../../output'
        );
        $this->addArgument(
            'template-dir',
            InputArgument::OPTIONAL,
            '',
            __DIR__ . '/../../template'
        );
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $configFile = $input->getArgument('config-file');
        
        $output->writeln('Configuration file');
        $output->writeln('> ' . $configFile);
        if (!is_file($configFile)) {
            throw new \RuntimeException(sprintf('Configuration file [%s] not found', $configFile));
        }
        if (!is_readable($configFile)) {
            throw new \RuntimeException(sprintf('Configuration file [%s] not readable', $configFile));
        }
        $config = require $configFile;
        if (!is_array($config)) {
            throw new \RuntimeException(sprintf('Configuration file [%s] does not return an array', $configFile));
        }
        if (!array_key_exists('name', $config)) {
            throw new \RuntimeException(sprintf('Configuration file [%s] has no [name] key which is required', $configFile));
        }
        $output->writeln('');
        
        $output->writeln('Output directory');
        $outputDir = $input->getArgument('output-dir') . '/' . strftime($config['name']);
        $output->writeln('> ' . $outputDir);
        if (is_dir($outputDir)) {
            $files = glob($outputDir . '/*');
            foreach ($files as $file) {
                unlink($file);
                $output->writeln('> ' . basename($file) . ' [deleted]');
            }
        } else {
            mkdir($outputDir, 0700, true);
            $output->writeln('> [created]');
        }
        $output->writeln('');
        
        $output->writeln('Template directory');
        $templateDir = $input->getArgument('template-dir');
        $output->writeln('> ' . $templateDir);
        if (!is_dir($templateDir)) {
            throw new \RuntimeException(sprintf('Template directory [%s] not found', $templateDir));
        }
        $output->writeln('');
        
        $tasks = array(
            array(
                'config_flag' => 'class_entity',
                'display_name' => 'entity',
                'template' => 'class_entity.php',
                'file_name' => function($generator) { return $generator->getGeneratedClassName(); }
            ),
            array(
                'config_flag' => 'class_entity_list',
                'display_name' => 'entity list',
                'template' => 'class_entity_list.php',
                'file_name' => function($generator) { return $generator->getGeneratedListClassName(); }
            ),
            array(
                'config_flag' => 'class_db_manager',
                'display_name' => 'database manager',
                'template' => 'class_db_manager.php',
                'file_name' => function($generator) { return $generator->getDbManagerClassName(); }
            ),
            array(
                'config_flag' => 'class_db_manager_service_factory',
                'display_name' => 'database manager service factory',
                'template' => 'class_db_manager_service_factory.php',
                'file_name' => function($generator) { return $generator->getDbManagerServiceFactoryClassName(); }
            ),
            array(
                'config_flag' => 'class_controller',
                'display_name' => 'controller',
                'template' => 'class_controller.php',
                'file_name' => function($generator) { return $generator->getControllerClassName(); }
            ),
            array(
                'config_flag' => 'config_module_config',
                'display_name' => 'module config',
                'template' => 'config_module_config.php',
                'file_name' => function($generator) { return 'module_config'; }
            ),
            array(
                'config_flag' => 'view_list',
                'display_name' => 'view list',
                'template' => 'view_list.php',
                'file_name' => function() { return 'list'; }
            ),
            array(
                'config_flag' => 'view_create',
                'display_name' => 'view create',
                'template' => 'view_create.php',
                'file_name' => function() { return 'create'; }
            ),
            array(
                'config_flag' => 'view_edit',
                'display_name' => 'view edit',
                'template' => 'view_edit.php',
                'file_name' => function() { return 'edit'; }
            ),
            array(
                'config_flag' => 'view_delete',
                'display_name' => 'view delete',
                'template' => 'view_delete.php',
                'file_name' => function() { return 'delete'; }
            ),
            array(
                'config_flag' => 'view_view',
                'display_name' => 'view view',
                'template' => 'view_view.php',
                'file_name' => function() { return 'view'; }
            ),
            array(
                'config_flag' => 'view_form',
                'display_name' => 'view form',
                'template' => 'view_form.php',
                'file_name' => function() { return '_form'; }
            ),
        );
        foreach ($tasks as $task) {
            $output->writeln(sprintf('Generating %s', $task['display_name']));
            if (!empty($config[$task['config_flag']])) {
                $generator = new GenerateTemplate();
                $generator->setConfig($config);
                $phpCode = $generator($templateDir . '/' . $task['template']);
                
                $callback = $task['file_name'];
                $outputFile = $callback($generator);
                $outputFile = $outputDir . '/' . $outputFile . '.php';
                $bytesWritten = file_put_contents($outputFile, $phpCode);
                $output->writeln($outputFile);
                $output->writeln(sprintf('> [written: %u Bytes]', $bytesWritten));
            } else {
                $output->writeln('> [skipped]');
            }
            $output->writeln('');
        }
    }
}