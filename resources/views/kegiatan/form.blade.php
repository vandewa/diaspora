<div class="card card-info mt-3">
    <div class="card-header">
        <h3 class="card-title">Kegiatan</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Judul</label>
            {{ Form::text('judul', null, ['class' => 'form-control ', 'placeholder' => 'Judul kegiatan', 'id' => 'judul']) }}
        </div>
        <div class="form-group">
            <label>Slug</label>
            {{ Form::text('slug', null, ['class' => 'form-control ', 'id' => 'slug', 'readonly' => true]) }}
        </div>
        <div class="form-group">
            <label>Isi Kegiatan</label>
            {{ Form::textarea('isi_berita', null, ['id' => 'summernote']) }}
        </div>
        {{-- <div class="form-group">
            <label>Video <small class="text-danger">(*maksimal 10MB)</small></label>
            <input type="file" class="form-control" name="video" accept="video/mp4,video/x-m4v,video/*">
        </div> --}}
        <div class="form-group">
            <label>Link Youtube</label>
            {{ Form::textarea('link_yt', null, ['rows' => 3, 'class' => 'form-control']) }}
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreVideoValidation') !!}
@endpush
