<?php

use Illuminate\Database\Seeder;

class packagesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('packages')->delete();
        
        \DB::table('packages')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'bayi',
                'user_counter' => '938',
                'data' => '{"content":"<ul><li><strong>0.5X RESOURCE POWER<\\/strong><\\/li><li><strong>500 MB<\\/strong> Disk Space<\\/li><li><strong>Unlimited<\\/strong> Bandwidth<\\/li><li><strong>Unlimited<\\/strong> Databases<\\/li><li><strong>1<\\/strong> Domain&nbsp;<\\/li><li><strong>Instant<\\/strong> Backup Unlimited&nbsp;<\\/li><li><strong>SSL<\\/strong> Gratis Selamanya<\\/li><\\/ul>","price":{"price":null,"price_before":"19.000","price_after":"14.000"}}',
                'status' => 1,
                'best_seller' => 0,
                'created_at' => '2021-10-29 20:14:07',
                'updated_at' => '2021-11-01 09:31:14',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Pelajar',
                'user_counter' => '4.168',
                'data' => '{"content":"<ul><li><strong>1X RESOURCE POWER<\\/strong><\\/li><li><strong>Unlimited<\\/strong> Disk Space<\\/li><li><strong>Unlimited<\\/strong> Bandwidth<\\/li><li><strong>Unlimited<\\/strong> POP3 Email<\\/li><li><strong>Unlimited<\\/strong> Databases<\\/li><li><strong>10<\\/strong> Addon Domains<\\/li><li><strong>Instant<\\/strong> Backup<\\/li><li><strong>Domain Gratis<\\/strong> Selamanya<\\/li><li><strong>Unlimited SSL<\\/strong> Gratis Selamanya<\\/li><\\/ul>","price":{"price":null,"price_before":"46.000","price_after":"23.000"}}',
                'status' => 1,
                'best_seller' => 0,
                'created_at' => '2021-11-01 09:11:52',
                'updated_at' => '2021-11-01 09:31:21',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'personal',
                'user_counter' => '10.017',
                'data' => '{"content":"<ul><li><strong>2X RESOURCE POWER<\\/strong><\\/li><li><strong>Unlimited<\\/strong> Disk Space<\\/li><li><strong>Unlimited<\\/strong> Bandwidth<\\/li><li><strong>Unlimited<\\/strong> POP3 Email<\\/li><li><strong>Unlimited<\\/strong> Databases<\\/li><li><strong>Unlimited<\\/strong> Addon Domains<\\/li><li><strong>Instant<\\/strong> Backup<\\/li><li><strong>Domain Gratis<\\/strong> Selamanya<\\/li><li><strong>Unlimited SSL<\\/strong> Gratis Selamanya<\\/li><li><strong>Private<\\/strong> Name Server<\\/li><li><strong>SpamAssasin<\\/strong> Mail Protection<\\/li><\\/ul>","price":{"price":null,"price_before":"58.000","price_after":"38.900"}}',
                'status' => 1,
                'best_seller' => 1,
                'created_at' => '2021-11-01 09:13:36',
                'updated_at' => '2021-11-01 09:31:26',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'bisnis',
                'user_counter' => '3.552',
                'data' => '{"content":"<ul><li><strong>3X RESOURCE POWER<\\/strong><\\/li><li><strong>Unlimited<\\/strong> Disk Space<\\/li><li><strong>Unlimited<\\/strong> Bandwidth<\\/li><li><strong>Unlimited<\\/strong> POP3 Email<\\/li><li><strong>Unlimited<\\/strong> Databases<\\/li><li><strong>Unlimited<\\/strong> Addon Domains<\\/li><li><strong>Magic Auto<\\/strong> Backup &amp; Restore<\\/li><li><strong>Domain Gratis<\\/strong> Selamanya<\\/li><li><strong>Unlimited SSL<\\/strong> Gratis Selamanya<\\/li><li><strong>Private<\\/strong> Name Server<\\/li><li><strong>Prioritas<\\/strong> Layanan Support<\\/li><li>\\u2605\\u2605\\u2605\\u2605\\u2605<\\/li><li><strong>SpamExpert<\\/strong> Pro Mail Protection<\\/li><\\/ul>","price":{"price":null,"price_before":"109.000","price_after":"65.900"}}',
                'status' => 1,
                'best_seller' => 0,
                'created_at' => '2021-11-01 09:14:36',
                'updated_at' => '2021-11-01 09:31:31',
            ),
        ));
        
        
    }
}
