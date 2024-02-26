 <!-- /.card-header -->
 <!-- Input addon -->
 <div class="card card-info mt-3">
     <div class="card-header">
         <h3 class="card-title">Partner</h3>
     </div>
     <div class="card-body">
         <div class="form-group">
             <label>Nama</label>
             {{ Form::text('nama', null, ['class' => 'form-control ', 'placeholder' => 'Nama']) }}
         </div>
         <div class="form-group">
             <label for="exampleInputPassword1">URL</label>
             {{ Form::text('url', null, ['class' => 'form-control ', 'placeholder' => 'Contoh: https://sobo-aksi.wonosobokab.go.id']) }}
         </div>
         <div class="form-group">
             <label for="">Foto</label>
             <div class="custom-file">
                 @if (Request::segment(2) == 'create')
                     <input type="file" class="custom-file-input van" id="customFile" name="logo"
                         accept="image/*">
                     <img id="preview-image-before-upload" src="{{ asset('noimage.png') }}" alt="preview image"
                         style="max-height: 250px;">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                 @else
                     <input type="file" class="custom-file-input van" id="customFile" name="logo"
                         accept="image/*">
                     @if ($data->logo == null)
                         <img id="preview-image-before-upload" src="{{ asset('not-found.jpg') }}" alt="preview image"
                             style="max-height: 250px;">
                     @else
                         <img id="preview-image-before-upload"
                             src="{{ route('helper.show-picture', ['path' => $data->logo]) }}" alt="preview image"
                             style="max-height: 250px; max-width: 300px;">
                     @endif
                     <label class="custom-file-label mb-5" for="customFile">Choose file</label>
                 @endif
             </div>

         </div>
     </div> <!-- /.card-body -->
     <div class="card-footer mt-5">
         <button type="submit" class="btn btn-primary float-right">Submit</button>
     </div>
 </div>

 @push('js')
     <script type="text/javascript">
         $(document).ready(function(e) {
             $('.van').change(function() {
                 console.log('berubah');
                 let reader = new FileReader();

                 reader.onload = (e) => {

                     $('#preview-image-before-upload').attr('src', e.target.result);
                 }

                 reader.readAsDataURL(this.files[0]);

             });
         });
     </script>
 @endpush
