<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index(){

        return view('admin_order_list');
    }

    public function statistik_day(){

        return view('admin_statistic_day');
    }

    public function statistik_week(){

        return view('admin_statistic_week');
    }

    public function statistik_month(){

        return view('admin_statistic_month');
    }

    public function income_day(){

        return view('admin_income_day');
    }

    public function income_week(){

        return view('admin_income_week');
    }

    public function income_month(){

        return view('admin_income_month');
    }

    public function beverage(){

        return view('admin_beverage');
    }

    public function archive(){

        return view('admin_archive');
    }
}
