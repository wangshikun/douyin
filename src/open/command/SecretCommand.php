<?php


namespace ytk\open\command;

use think\facade\App;
use think\console\Input;
use think\console\Output;

class SecretCommand extends \think\console\Command
{
    public function configure()
    {
        $this->setName('dy:create')
            ->setDescription('create dy_sdk secret and create config file');
    }

    public function execute(Input $input, Output $output)
    {
        $path = app()->getAppPath().'..'.DIRECTORY_SEPARATOR.'.env';
        if (file_exists($path)
            && strpos(file_get_contents($path), '[DY_SDK]')
        ) {
            $output->writeln('JWT_SECRET is exists');
        } else {
            file_put_contents(
                $path,
                PHP_EOL."[DY_SDK]".PHP_EOL."APP_KEY='这是APP_KEY'".PHP_EOL."APP_SECRET='这里是APP_SECRET'".PHP_EOL,
                FILE_APPEND
            );
            $output->writeln('DY_SDK has created');
        }
        $this->createConfig($output);
    }

    public function createConfig($output)
    {
        $configFilePath = app()->getAppPath().'..'.DIRECTORY_SEPARATOR.'config'
            .DIRECTORY_SEPARATOR.'dy.php';

        if (is_file($configFilePath)) {
            $output->writeln('Config file is exist');

            return;
        }
        $res = copy(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'
            .DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR
            .'config.php', $configFilePath);
        if (strpos(\think\App::VERSION, '6.0') !== false) {
            $config = file_get_contents($configFilePath);
            $config = str_replace('Tp5', 'Tp6', $config);
            file_put_contents($configFilePath, $config);
        }
        if ($res) {
            $output->writeln('Create config file success:'.$configFilePath);
        } else {
            $output->writeln('Create config file error');
        }
    }
}
