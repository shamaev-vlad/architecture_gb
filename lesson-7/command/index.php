<?php
spl_autoload_register(function ($class) {
    include $class.'.php';
});


class App
{
    private $current = -1;

    public function executeCommand(Command $command){
        $command->execute();
        $this->current++;
    }

}

$text = "Hello!";

$user = new User($text);
$app = new App();

$app->executeCommand(new Copy($user, 0, 4));
echo $user->action() . PHP_EOL;

$app->executeCommand(new Cut($user, 0, 4));
echo $user->getText() . PHP_EOL;

$app->executeCommand(new Paste($user, 4));
echo $user->getText() . PHP_EOL;
