<?php
include 'engine/Bot.php';
include 'engine/Quotation.php';

$bot = new Bot();
$list = [
    'quote dollar' => '',
    'quote euro' => '',
    'address' => '',
    'What is your name?' => $bot->getName(),
    'help' => ['help 1' => '', 'help 2' => '']
];            
            

while(true) {
    print(PHP_EOL);
    $option = readline(prompt:"Type <help> or <question> or <-1> to exit");

    switch ($option) {
        case '-1':
            die('Bye...');
        
        case 'quote dollar':
            $c = new Quotation(coin: 'USD-BRL');

            print($c->returns()->name . PHP_EOL);
            print($c->returns()->create_date . PHP_EOL);
            print($c->returns()->high . PHP_EOL);
            print($c->returns()->low . PHP_EOL);
            break;
        
        case 'address':
            $zipcode = readline(prompt:'Input the ZipCode: ');
            print('ZipCode: ' . $zipcode);
            break;
        
        default:
            print($bot->getQuestion($argv[1], $list));
    }
}