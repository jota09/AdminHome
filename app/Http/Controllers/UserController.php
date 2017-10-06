<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Grids;
use HTML;
use Illuminate\Support\Facades\Config;
use Nayjest\Grids\Components\Base\RenderableRegistry;
use Nayjest\Grids\Components\ColumnHeadersRow;
use Nayjest\Grids\Components\ColumnsHider;
use Nayjest\Grids\Components\CsvExport;
use Nayjest\Grids\Components\ExcelExport;
use Nayjest\Grids\Components\Filters\DateRangePicker;
use Nayjest\Grids\Components\FiltersRow;
use Nayjest\Grids\Components\HtmlTag;
use Nayjest\Grids\Components\Laravel5\Pager;
use Nayjest\Grids\Components\OneCellRow;
use Nayjest\Grids\Components\RecordsPerPage;
use Nayjest\Grids\Components\RenderFunc;
use Nayjest\Grids\Components\ShowingRecords;
use Nayjest\Grids\Components\TFoot;
use Nayjest\Grids\Components\THead;
use Nayjest\Grids\Components\TotalsRow;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\EloquentDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;

class UserController extends Controller
{
  public function index()
  {
      return view('adminhome.user',$this->grilla());
  }

  public function grilla()    {

      $filter = \DataFilter::source(new User);
      //simple like
      $filter->add('name','Name', 'text');
      $filter->submit('search');
      $filter->reset('reset');
      $grid = \DataGrid::source($filter);
      $grid->add('id','Id', true);
      $grid->add('name','Name', true);
      $grid->add('email','Email', true);
      $grid->buildCSV();  //  force download
      $grid->buildCSV('export_articles', 'Y-m-d.His');  // force download with custom name
      $grid->buildCSV('uploads/filename', 'Y-m-d');  // write on file
      $title = "<h1>Lista de usuarios</h1>";
      return compact('grid', 'title','filter');
  }
}
