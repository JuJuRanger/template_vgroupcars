@extends('frontend.layouts.configdropdownforjquery')
@section('title') Dropdown @parent @endsection

@section('content')
<div class="container">
    <h3 class="text-center mt-5">ข้อมูลจังหวัดในประเทศไทย</h3>
    <div class="form-group">
        <select class="form-control" name="province" id="province">
            <option value="">เลือกข้อมูลจังหวัด</option>
            @foreach ($list as $item)
            <option value="{{ $item->id }}">{{ $item->name_th }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select class="form-control amphure" name="amphure" id="amphure">
            <option value="">เลือกข้อมูลอำเภอ</option>
        </select>
    </div>
</div>

{{-- '@csrf' หรือ '{{ csrf_field() }}'  มีค่าเท่ากัน--}}
@csrf

@endsection

@section('customscript')
<script>
    $('#province').change(function() {
        if ($(this).val() != '') {
            var select = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('dropdown.fetch') }}",
                method: "POST",
                data: {
                    select: select,
                    _token: _token,
                },
                success: function(result) {
                    $('.amphure').html(result);
                }
            })
            // console.log(select);
        }
    });
</script>
@endsection
