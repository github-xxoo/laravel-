<?php

namespace App\Http\Controllers;

use App\Msg;
use Illuminate\Http\Request;

class MsgsController extends Controller
{
    //

    public function add(Request $request)
    {
        $msg = new Msg();

        if($request->isMethod('POST'))
        {
            $this->validate($request, [
               'User.title' => 'required',
                'User.content' => 'required',
            ],[
                'required' => ':attribute 为必填项',
            ],[
                'User.title' => '留言标题',
                'User.content' =>'留言内容',
            ]);

            $data = $request->input('User');

//            dd($data);

            if(Msg::create($data))
            {

                return redirect('msg/index') -> with('success', '添加成功');
            }else{
                return redirect()->back()->with('error', '添加失败');

            }
        }

        return view('msg.add',[
            'msg' => $msg,
        ]);
    }



    public function index()
    {

        $msgs  = Msg::paginate(5);
        return view('msg.index',[
            'msgs' => $msgs,
        ]);
    }

    public function delete($id){
        $msg = Msg::find($id);
        if($msg->delete()){
            return redirect('msg/index') -> with('success', '删除成功');
        } else {
            return redirect('msg/index') -> with('error', '删除失败');
        }

    }

    public function update(Request $request, $id){
        $msg = Msg::find($id);
        if($request->isMethod('POST')){

            $this->validate($request, [
                'User.title' => 'required',
                'User.content' => 'required',
            ],[
                'required' => ':attribute 为必填项',
            ],[
                'User.title' => '留言标题',
                'User.content' =>'留言内容',
            ]);

            $data = $request->input('User');
            $msg->title = $data['title'];
            $msg->content = $data['content'];

//            dd($data);
            if($msg->save()){
                return redirect('msg/index')->with('success', '更新成功');
            } else {
                return redirect('msg/index') -> with('error', '更新失败');
            }
        }


        return view('msg.update', [
            'msg' => $msg,
        ]);
    }

}
