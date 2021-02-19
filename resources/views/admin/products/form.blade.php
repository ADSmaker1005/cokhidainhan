<x-app-layout>
    <x-slot name="header">
            {{ __('Form bài viết') }}
    </x-slot>
    <form action="" id="products_form">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" id="form--name" value="{{ (isset($products)) ? $products->name : '' }}" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" id="form--slug" value="{{ (isset($products)) ? $products->slug : '' }}" name="slug">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="categories[]" id="categories" multiple id="locate">

                                    @if (isset($products))
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}" @foreach ($products->Categories as $category){{ ($category->id == $item->id) ? 'selected' : ''}}@endforeach>{{ $item->name }}</option>
                                            @endforeach
                                    @else
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    @endif




                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Vị trí</label>
                            <select class="form-control" name="locate" id="locate">
                                <option value="0">---Chọn---</option>
                                <option value="1" {{ isset($products) ? ($products->locate =='1' ? 'selected' : '') : '' }}>Trang chủ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea type="text" class="form-control" name="text" id="text">{!! (isset($products)) ? $products->text : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label>Thông số</label>
                        <table class="table table-bordered" id="table--info">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Nội dung</th>
                                    <th style="width: 15%">
                                        <button type="button" id="add_column" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-arrow-down"></i></button>
                                        <button type="button" id="delete_column" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-arrow-up"></i></button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (isset($products) && $products->infoname!= null && $products->infotext)
                                @php
                                    $infoname = unserialize($products->infoname);
                                    $infotext = unserialize($products->infotext);
                                @endphp
                                 @for ($i = 0; $i < min([count(unserialize($products->infoname)),count(unserialize($products->infotext))]); $i++)
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" style="border: none;width:100%" value="{{ $infoname[$i] }}" name="infoname[]" id="infoname">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" style="border: none;width:100%" value="{{ $infotext[$i]}}" name="infotext[]" id="infotext">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                 @endfor
                                @else
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" style="border: none;width:100%" name="infoname[]" id="infoname">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" style="border: none;width:100%" name="infotext[]" id="infotext">
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea type="text" class="form-control content" name="content">{!! (isset($products)) ? $products->content : '' !!}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Thẻ title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ (isset($products)) ? $products->title : '' }}">
                </div>
                <div class="form-group">
                    <label>Thẻ meta description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ (isset($products)) ? $products->description : '' }}">
                </div>
                <div class="form-group">
                    <label>Thẻ keywords</label>
                    <input type="text" class="form-control taginput" data-role="tagsinput" name="keywords" id="keywords" value="{{ (isset($products)) ? $products->keywords : '' }}">
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <div class="input-group">
                        <img src="{{ (isset($products)) ? $products->img : asset('images/blank.png') }}" id="lfm" data-input="thumbnail">
                        <input id="thumbnail" class="form-control" type="hidden" name="img" value="{{ (isset($products)) ? $products->img : '' }}">
                      </div>
                </div>
            </div>
        </div>
        <button class="btn btn-xs btn-success" type="submit" id="form_btn" style="position: fixed;bottom:5%;right:5%;z-index:999">Xác nhận</button>
    </form>
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    @endpush
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.10.2/beautify.js"></script>
        <script src="//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js" type="text/javascript"></script>
        <!--Wysiwig js-->
        <script>
            $('.taginput').tagsinput('items');
        </script>
        <script>
            var btn = $('#lfm');
            var input1 = $('#thumbnail');

            function Manager(a, b)
            {
                a.filemanager('image');
                b.on("change keyup paste click",function(){
                    var x = a;
                    var y = b.val();
                    console.log(y);
                    x.attr('src', y);
                });
            }
            window.Manager(btn, input1);
        </script>
        <script>
            $('#form--name').keyup(function(){
                var title =$(this).val();
                slug = title.toLowerCase();

                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                $('#form--slug').val(slug);
            });
        </script>
        @if (isset($products))
            <script>
                var url = "{{ route('admin.products.update',$products->id) }}";
                var type = "POST";
            </script>
        @else
            <script>
                var url = "{{ route('admin.products.store') }}";
                var type = "POST";
            </script>
        @endif
        <script>
            $(document).ready(function() {
                $('#categories').select2();
            });
        </script>
        <script>
            $('#products_form').attr('action',url).attr('method','post');
            $("#add_column").on("click", function(){
                $('#table--info tr').last().after(
                    '<tr><td><input type="text" class="form-control" style="border: none;width:100%" name="infoname[]"></td><td><input type="text" class="form-control" style="border: none;width:100%" name="infotext[]"></td><td></td></tr>'
                    );
            });
        </script>
    @endpush
</x-app-layout>

