<?php

declare(strict_types=1);

namespace App\Command\Item;

use App\Model\Item;

use Minicli\Command\CommandController;
use Minicli\Output\Filter\ColorOutputFilter;
use Minicli\Output\Helper\TableHelper;

class SearchController extends CommandController
{
    public function handle(): void
    {
        $item = new Item;

        $type = '';

        $data = [];

        if($this->hasParam('sku')){
            $type = 'sku';

            $data['sku'] = $this->getParam('sku');
        }

        if($this->hasParam('company')){
            $type = 'company';

            $data['company'] = $this->getParam('company');    
        }

        if($this->hasParam('title')){
            $type = 'title';

            $data['title'] = $this->getParam('title');    
        }

        // HSAKJDH7832

        $items = $item->search($data, $type);

        $this->display('Testing Tables');

        $table = new TableHelper();
        $table->addHeader(['id', 'title', 'sku', 'location', 'company', 'quantity', 'created_at','updated_at']);

        foreach ($items as $item) {
            $table->addRow([(string)$item->id, $item->title, $item->sku, $item->location, $item->company, (string)$item->quantity, $item->created_at, $item->updated_at ]);
            
        }

        // for($i = 1; $i <= 10; $i++) {
        //     $table->addRow([(string)$i, (string)rand(0, 10), "other string {$i}"]);
        // }

        $this->newline();
        $this->rawOutput($table->getFormattedTable(new ColorOutputFilter()));
        $this->newline();
    }
}
