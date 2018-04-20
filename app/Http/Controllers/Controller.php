<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function error($code='100',$message='')
    {

        $error = [
            'code' => $code,
            'message' => $message
        ];

        return response()->json($error);

    }

    public function success($message='',$data=[])
    {

        $success = [
            'code' => 200,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($success);

    }

        public function validate(Request $request, array $rules)
        {
            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

            if ($validator->fails()) {

                header('Content-Type:  application/json');
                echo json_encode([
                    'code' => 500,
                    'message' => $validator->errors()->first(),
                ]);

                exit;

            }
        }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        // the token is valid and we have found the user via the sub claim
        return $user;
    }


    public function base64_upload($base64)
    {
        //取出base64字符串
        if (strstr($base64, ",")) {

            $image = explode(',', $base64);

            $image = $image[1];

        }
        $path = "uploads/sign/" . date('YmdHis', time());
        //创建文件夹
        if (!file_exists($path)) {
            mkdir($path, 0700, true);
        }
        $image = base64_decode($image);

        $image_path = $path . '/' . uniqid() . str_random(5) . ".png";
        if (file_put_contents($image_path, $image)) {

            return $image_path;
        }
        return false;

    }

    /**二维数组排序
     * @param $key排序字段
     * @param int $sort SORT_ASC 升序 ，SORT_DESC 降序
     * @param $arr二维数组
     * @return array
     */
    public function arr_sort($key, $sort = SORT_ASC, $arr)
    {
        $result = array();
        array_column($arr,$key);
        foreach ($arr as $vo) {
            $result[] = $vo[$key];
        }
        array_multisort($result, $sort, $arr);
        return $arr;
    }

    /**二维数组排序
     * @param $key排序字段
     * @param int $sort SORT_ASC 升序 ，SORT_DESC 降序
     * @param $arr二维数组
     * @return array
     */
    public function arr_sort2($key, $sort = SORT_ASC, $arr)
    {
        array_multisort( array_column($arr,$key), $sort, $arr);
        return $arr;
    }


    /**分组函数
     * @param $arr数组
     * @param $key分组字段
     * @return array
     */
    public function array_group_by($arr, $key)
    {

        $grouped = [];
        foreach ($arr as $value) {
            $grouped[$value[$key]][] = $value;
        }
        if (func_num_args() > 2) {
            $args = func_get_args();
            foreach ($grouped as $key => $value) {
                $parms = array_merge([$value], array_slice($args, 2, func_num_args()));
                $grouped[$key] = call_user_func_array('array_group_by', $parms);
            }
        }
        return $grouped;

    }

    //状态
    public function msg_status($msg_status =100){
        session(['msg_status'=>$msg_status]);
        return true;
    }

//获取当前用户信息
    public  function  getUser(){

       $user_id =  session('user_id');

       $user_info = User::find($user_id);

       return $user_info;

    }
//获取指定用户信息
    public  function  userinfo($user_id){

       $user_info =  User::find($user_id);

        return $user_info;

    }

    //判断登陆状态
    public function login_info(){
        if(session()->has('user_id')){
            return true;
        }else{
            return false;
        }
    }



}
