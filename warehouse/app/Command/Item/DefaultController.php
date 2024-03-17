<?php

declare(strict_types=1);

namespace App\Command\Item;

use Minicli\Command\CommandController;

class DefaultController extends CommandController
{
    public function handle(): void
    {
        $this->info('Usage: ');
        $this->out("\t warehouse item [option] \r\n");

        $this->info('Options: ');

        $this->out("\t new - add new item \r\n");
        $this->out("\t resupply - resupply item \r\n");
        $this->out("\t search - search for item by sku, title, or company \r\n");


        // $this->display("Hello World");
        // $this->error("Hello World");
        // $this->info("Hello World");
        // $this->success("Hello World");
        // $this->display("Hello World",true);
        // $this->error("Hello World",true);
        // $this->info("Hello World",true);
        // $this->success("Hello World",true);
        // $this->out("Hello World!\r\n", 'underline');
        // $this->out("Hello World!\r\n", 'dim');
        // $this->out("Hello World!\r\n", 'bold');
        // $this->out("Hello World!\r\n", 'inverted');
        // $this->out("Hello World!\r\n", 'italic');
    }
}
