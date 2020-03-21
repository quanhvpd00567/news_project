@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tạo mới menu</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        @include('admin.pages.menu._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{--    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>--}}
    {{--    <script>--}}
    {{--        new Vue({--}}
    {{--            el: '#post',--}}
    {{--            data: {--}}
    {{--                category_name: "",--}}
    {{--            },--}}
    {{--            computed: {--}}
    {{--                slug: function() {--}}
    {{--                    var slug = this.sanitizeTitle(this.category_name);--}}
    {{--                    return slug;--}}
    {{--                }--}}
    {{--            },--}}
    {{--            methods: {--}}
    {{--                sanitizeTitle: function(title) {--}}
    {{--                    var slug = "";--}}
    {{--                    // Change to lower case--}}
    {{--                    var titleLower = title.toLowerCase();--}}
    {{--                    // Letter "e"--}}
    {{--                    slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');--}}
    {{--                    // Letter "a"--}}
    {{--                    slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');--}}
    {{--                    // Letter "o"--}}
    {{--                    slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');--}}
    {{--                    // Letter "u"--}}
    {{--                    slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');--}}
    {{--                    // Letter "d"--}}
    {{--                    slug = slug.replace(/đ/gi, 'd');--}}
    {{--                    // Trim the last whitespace--}}
    {{--                    slug = slug.replace(/\s*$/g, '');--}}
    {{--                    // Change whitespace to "-"--}}
    {{--                    slug = slug.replace(/\s+/g, '-');--}}

    {{--                    return slug;--}}
    {{--                }--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}

    <script>
        $('input[type="checkbox"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
    </script>
@endsection
