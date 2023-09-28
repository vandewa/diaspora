<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Berita</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Judul Berita</label>
            {{ Form::text('judul', null, ['class' => 'form-control ', 'placeholder' => 'Judul berita', 'id' => 'judul']) }}
        </div>
        <div class="form-group">
            <label>Slug</label>
            {{ Form::text('slug', null, ['class' => 'form-control ', 'id' => 'slug', 'readonly' => true]) }}
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <div class="dropzone" id="my-dropzone">
            </div>
        </div>
        <div class="form-group">
            <label>isi Berita</label>
            {{ Form::textarea('isi_berita', null, ['id' => 'summernote']) }}
        </div>
    </div class="form-group">
    <div class="card-footer">
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\BeritaStoreValidation') !!}
@endpush
