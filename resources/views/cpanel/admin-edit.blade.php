@extends('cpanel.layouts.master')
@section('content')

<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">   
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">تعديل الملف الشخصي</h3>

              @if(session('status'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                    </div>
                 @endif 

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <form action="{{ action('AdminController@update',$admin->id) }}" method="post">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">الاسم</label>
                    <input type="text" name="name" class="form-control" value="{{$admin->name}}">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="name">البريد</label>
                    <input type="text" name="email" class="form-control"  value="{{$admin->email}}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="name">كلمة المرور</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>

                
                <input type="submit" name="submit" class="btn btn-primary" value="تعديل">
                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="_token" value="{{ Session::token() }}" />

              </form>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
