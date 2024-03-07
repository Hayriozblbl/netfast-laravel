 @extends('backend.layouts.app')
 @section('content')


 <section id="basic-input">
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Ürün Düzenle</h4>
                     @include('includes.partials.messages')
                 </div>
                 <div class="card-content">
                     <div class="card-body">


                         <form role="form" action="{{ route('admin.shopping.update',$shopping->id) }}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }}
                             {{ method_field('PATCH') }}


                             <div class="row">

                                 <div class="col-8">

                                     <div class="card">
                                         <div class="header">
                                             <h2>Ürün Görseli</h2>
                                         </div>
                                         <div class="body">
                                             <input type="file" class="form-control dropify" id="image" data-default-file="{{ URL::to('uploads/shopping', $shopping->image) }}" data-allowed-file-extensions="png jpg jpeg" name="image">
                                         </div>
                                     </div>

                                     <script type="text/javascript">
                                         $("#file-1").fileinput({
                                             rtl: true,
                                             showUpload: false,
                                             theme: 'fa',
                                             uploadUrl: "/image-view",
                                             uploadExtraData: function() {
                                                 return {
                                                     _token: $("input[name='_token']").val(),
                                                 };
                                             },
                                             allowedFileExtensions: ['jpg', 'png', 'jpeg'],
                                             overwriteInitial: false,
                                             maxFilesNum: 20,
                                             slugCallback: function(filename) {
                                                 return filename.replace('(', '_').replace(']', '_');
                                             }
                                         });
                                     </script>



                                 </div>




                             </div>





                             <div class="row clealfix">

                                 <div class="col-sm-12">

                                     <div class="card">
                                         <div class="header">
                                             <h2>Ürün Adı</h2>
                                         </div>
                                         <div class="body">

                                             <input value="@if (old('name')){{ old('name') }}@else{{ $shopping->name }}@endif" type="text" class="form-control" id="name" name="name">

                                         </div>
                                     </div>

                                 </div>
                             </div>


                             <div class="row clealfix">
                                 <div class="col-sm-12">
                                     <div class="card">
                                         <div class="header">
                                             <h2>Ürün Açıklaması </h2>
                                         </div>
                                         <div class="body">

                                             <textarea type="text" class="ckeditor" name="description">{!! $shopping->description !!}</textarea>
                                             <script type="text/javascript">
                                                 CKEDITOR.replace('description');
                                                 CKEDITOR.add
                                             </script>
                                         </div>
                                     </div>
                                 </div>

                             </div>






                             <div class="row clealfix">
                                 <div class="col-sm-12">
                                     <div class="card">
                                         <div class="header">
                                             <h2>Ürün Site Link</h2>
                                         </div>
                                         <div class="body">

                                             <input type="text" class="form-control" name="link" aria-required="true" value="{{ old('link', $shopping->link) }}">


                                         </div>
                                     </div>
                                 </div>

                             </div>
                             <div class="box-footer">
                                 <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                                 <a type="button" class="btn btn-warning" href="{{   route('admin.shopping.index')   }}">{{ trans('backend.back') }}</a>
                             </div>

                         </form>


                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 @endsection