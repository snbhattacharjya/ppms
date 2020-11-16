<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    protected $categories = array(
        array(
            "govt" => "01",
            "govt_description" => "Central Government",
            "usercode" => 1,
            "posted_date" => "2013-12-26 17:39:45",
        ),
        array(
            "govt" => "02",
            "govt_description" => "State Government",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:51:56",
        ),
        array(
            "govt" => "03",
            "govt_description" => "Central Government Undertaking",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:50:23",
        ),
        array(
            "govt" => "04",
            "govt_description" => "State Government Undertaking",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:50:23",
        ),
        array(
            "govt" => "05",
            "govt_description" => "Local Bodies",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:50:23",
        ),
        array(
            "govt" => "06",
            "govt_description" => "Govt. Aided Organisation",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:50:23",
        ),
        array(
            "govt" => "07",
            "govt_description" => "Autonomous Body",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:50:23",
        ),
        array(
            "govt" => "08",
            "govt_description" => "Other",
            "usercode" => 1,
            "posted_date" => "2014-01-22 18:50:23",
        ),
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            Category::factory()->create([
                'name' => $category['govt_description'],
                'code' => $category['govt'],
            ]);
        }
    }
}
