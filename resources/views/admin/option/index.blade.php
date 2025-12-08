@extends('admin.layout.main')

@section('content')
@include('admin.layout.header')
@include('admin.alert')
<?php use App\Models\OptionTranslation; ?>
<div class="d-sm-flex align-items-center justify-content-between mb-3 flex">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">Tùy chọn</h2>
    <a class="add-iteam" href="{{route('option.create')}}"><button class="btn-success form-control" type="button"><i class="fa fa-plus" aria-hidden="true"></i> {{__('lang.add')}}</button></a>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav nav-pills">
                    @foreach($parents as $key => $parent)
                    <li><a data-toggle="tab" class="nav-link @if($key == 0) active @endif" href="#tab{{$key}}">{{ $parent->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-content overflow">
                @foreach($parents as $key => $parent)
                <div class="tab-pane @if($key == 0) active @endif" id="tab{{$key}}">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Color</th>
                                <th>Color 1</th>
                                <th>Img</th>
                            </tr>
                        </thead>

                        <tbody>
                        @if(isset($children[$parent->id]))
                        @foreach($children[$parent->id] as $val)
                        <tr>
                            <input type="hidden" class="option-id" value="{{ $val->id ?? '' }}">

                            <td><input class="form-control auto-submit" type="text" name="name" value="{{ $val->name }}" placeholder="name"></td>
                            <td><input class="form-control auto-submit" type="text" name="color" value="{{ $val->color }}" placeholder="color"></td>
                            <td><input class="form-control auto-submit" type="text" name="color_1" value="{{ $val->color_1 }}" placeholder="color"></td>

                            <td>
                                <input class="form-control auto-submit" type="file" name="img">
                                @if(!empty($val->img))
                                    <img src="{{ asset('uploads/options/'.$val->img) }}" width="60">
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif

                        <tr>
                            <input type="hidden" class="option-id" value="">
                            <input type="hidden" class="parent-id" value="{{ $parent->id }}">

                            <td><input class="form-control auto-submit" type="text" name="name" placeholder="name"></td>
                            <td><input class="form-control auto-submit" type="text" name="color" placeholder="color"></td>
                            <td><input class="form-control auto-submit" type="text" name="color_1" placeholder="color"></td>
                            <td><input class="form-control auto-submit" type="file" name="img"></td>
                        </tr>
                        
                        </tbody>

                    </table>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script>
    $(document).on('blur change', '.auto-submit', function () {

        let row = $(this).closest('tr');
        let formData = new FormData();

        let id = row.find('.option-id').val();
        let parent_id = row.find('.parent-id').val();

        if (id) formData.append('id', id);
        formData.append('parent', parent_id);

        row.find('input').each(function() {
            if (this.type === 'file') {
                if (this.files.length > 0) {
                    formData.append(this.name, this.files[0]);
                }
            } else {
                formData.append(this.name, $(this).val());
            }
        });

        $.ajax({
            url: "{{ route('option.save') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                row.find('.option-id').val(res.id); // cập nhật khi tạo mới
                console.log('Saved OK');
            }
        });
    });

</script>

@endsection