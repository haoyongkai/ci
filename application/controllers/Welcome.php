<?php

// class single{
//     private static $ins = null;
//     private final function __construct() {}
//     private function __clone(){};
//     public static function getIns(){
//         if(self::$ins === null) self::$ins = new single();
//         return self::$ins;
//     }
// }


// class single {
//     private static $_instance;
    
//     private function __construct(){

//     }
    
//     private function __clone(){

//     }

//     public static function getInstance(){
//         if (!(self::$_instance instanceof self)) {
//             return self::$_instance = new self();
//         }
//         return self::$_instance;
//     }
// }


defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        var_dump($this->load);
        die();
		$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
        

        print_r(array_filter($values));
        die();
    	$arr = [2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45,2,3,4,5,1,2,5,89,23,12,3,45];

        echo $this->microtime_float(),'<br/>';
    	$brr = $this->quickSort($arr);
    	echo microtime(true),'<br/>';
        $crr = $this->bubbleSort($arr);
        echo microtime(true),'<br/>';

    	echo "<pre>";
    	print_r($brr);
    	echo "</pre>";
    	die();
		$this->load->view('welcome_message');
	}


	public function microtime_float()
	{
	    list($usec, $sec) = explode(" ", microtime());
	    return ((float)$usec + (float)$sec);
	}

    /**
     * 快速排序
     *
     */
	private function quickSort($arr) {
		    //先判断是否需要继续进行
		    $length = count($arr);
		    if($length <= 1) {
		        return $arr;
		    }
		    //选择第一个元素作为基准
		    $base_num = $arr[0];
		    //遍历除了标尺外的所有元素，按照大小关系放入两个数组内
		    //初始化两个数组
		    $left_array = array();  //小于基准的
		    $right_array = array();  //大于基准的
		    for($i=1; $i<$length; $i++) {
		        if($base_num > $arr[$i]) {
		            //放入左边数组
		            $left_array[] = $arr[$i];
		        } else {
		            //放入右边
		            $right_array[] = $arr[$i];
		        }
		    }
		    //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
		    $left_array = $this->quickSort($left_array);
		    $right_array = $this->quickSort($right_array);
		    //合并
		    return array_merge($left_array, array($base_num), $right_array);
	}
		
	public function bubbleSort($arr){  
			$len=count($arr);
			  //该层循环控制 需要冒泡的轮数
			for($i=1;$i<$len;$i++)
			 { //该层循环用来控制每轮 冒出一个数 需要比较的次数
			    for($k=0;$k<$len-$i;$k++)
			    {
			       if($arr[$k]>$arr[$k+1])
			        {
			            $tmp=$arr[$k+1];
			            $arr[$k+1]=$arr[$k];
			            $arr[$k]=$tmp;
			        }
			    }
			 }
			return $arr;
	}
	/**
	 * php 链表实战
	 */
}
