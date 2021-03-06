@extends('Backend.Layouts.default')
@section ('title', 'ZeLike 澤樣室內設計')
@section('content')
	<div id="content-container">
		<div id="page-head">
            <div id="page-title">
                <h1 class="page-header text-overflow">Người dùng</h1>
            </div>
            <ol class="breadcrumb">
			<li><a href="#"><i class="demo-pli-home"></i></a></li>
			<li><a href="#">Thêm mới</a></li>
            </ol>
        </div>
		<div id="page-content">
		    <div class="panel-body">
		        <div class="panel">
		            <div class="panel">
			            <div class="panel-heading">
			               
			            </div>

			            @if (!isset($role)) 
							<form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
								@method ('POST')
			            @else
							<form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
								@method ('PUT')
			            @endif
			           		@csrf
			                <div class="panel-body col-sm-offset-2">
			                    <div class="row">
			                        <div class="col-sm-10">
			                            <div class="form-group">
			                                <label class="control-label">Tên</label>
			                                <input type="text" name="name" class="form-control" value="{{ @$role->name }}">
			                                @if ($errors->has('name'))
				                            	<p class="text-left text-danger">{{ $errors->first('name') }}</p>
				                            @endif
			                            </div>
			                        </div> 
			                        <div class="col-sm-10">
			                            <div class="form-group">
			                                <label class="control-label">Tên hiển thị</label>
			                                <input type="text" name="display_name" class="form-control" value="{{ @$role->display_name }}">
			                                @if ($errors->has('display_name'))
				                            	<p class="text-left text-danger">{{ $errors->first('display_name') }}</p>
				                            @endif
			                            </div>
			                        </div>

			                        <div class="col-sm-10">
			                            <div class="form-group">
			                                <label class="control-label">Mô tả</label>
			                                <input type="text" name="description" class="form-control" value="{{ @$role->description }}">
			                                @if ($errors->has('description'))
				                            	<p class="text-left text-danger">{{ $errors->first('description') }}</p>
				                            @endif
			                            </div>
			                        </div>
			                    </div>
			                    <div class="row">
			                    	<div class="col-sm-10">
			                        	<button type="submit" class="btn btn-primary btn-block">Gửi</button>
			                        </div>
			                    </div>
			                </div>
			                
					   	</form>
			        </div>
		        </div>
		    </div>
		</div>
	</div>
@endsection

@section ('myJs')
	
@endsection

@section ('myCss')
	
@endsection

