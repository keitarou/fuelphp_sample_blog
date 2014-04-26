<?php
/**
 * テストクラス
 * @group App
 * @runInSeparateProcess
 */
class Tests_Sample extends TestCase {


    /**
     * テストクラス
     * @group App
     */
    public function test_sample1()
    {
        setcookie('hoge', 'Hoge');
        $sample = new \Model\Sample();
        // $sample->set_header();
        $this->assertEquals(0, 0);

        // $query = DB::query('SELECT now()');
        // var_dump($query->execute());

    }

}
