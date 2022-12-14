
<div class="row">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                Form {{ $title }}
            </div>
            <form action="{{ route('admin.drugs.store') }}" method="post" novalidate enctype="multipart/form-data">
                @csrf

                <div class="card-body py-4">
                    <div class="row">
                        <div class="mb-3">
                            <x-forms.label id="kode_obat">Kode Obat</x-forms.label>
                            <x-forms.input name="kode_obat" :value="old('kode_obat')" autofocus maxlength="5"
                                placeholder="KO001" />
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="nama_obat">Nama Obat</x-forms.label>
                            <x-forms.input name="nama_obat" :value="old('nama_obat')" />
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 mb-2 md-md-0">
                                    <div class="bg-light border rounded overflow-hidden d-grid"
                                        style="min-height: 50px; height: 100%; place-content: center;">
                                        {{-- <span data-feather="slash"></span> --}}
                                        <img src="" alt="" class="bg-gray w-100 d-block" id="img-preview">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <x-forms.label id="image" :required="false">Foto Anggota</x-forms.label>
                                    <x-forms.input type="file" name="image"
                                        onchange="showPreviewImage(event, '#img-preview')" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="harga_beli">Harga Beli</x-forms.label>
                            <x-forms.input type="number" name="harga_beli" :value="old('harga_beli')" />
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="harga_jual">Harga Jual</x-forms.label>
                            <x-forms.input type="number" name="harga_jual" :value="old('harga_jual')" />
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="stock">Stok</x-forms.label>
                            <x-forms.input type="number" name="stock" :value="old('stock')" />
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="satuan">Satuan</x-forms.label>
                            <x-forms.input name="satuan" :value="old('satuan')" />
                        </div>

                        {{-- <div class="mb-3">
                            <x-forms.label id="phone_number">No. Telepon</x-forms.label>
                            <x-forms.input name="phone_number" type="tel" :value="old('phone_number')" />
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="whatsapp_number">No. WA</x-forms.label>
                            <x-forms.input name="whatsapp_number" type="tel" :value="old('whatsapp_number')" />
                        </div>

                        <div class="mb-3">
                            <x-forms.label id="jenis_kelamin">Jenis Kelamin</x-forms.label>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jenis_kelamin1" value="L" @checked(old('jenis_kelamin')=="L" ) />
                                    <label class="form-check-label" for="jenis_kelamin1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                                        id="jenis_kelamin2" value="P" @checked(old('jenis_kelamin')=="P" ) />
                                    <label class="form-check-label" for="jenis_kelamin2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                            <small class="d-block mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <x-forms.label id="description" :required="false">Keterangan</x-forms.label>
                            <x-forms.textarea name="description">{{ old('description') }}</x-forms.textarea>
                        </div> --}}
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-between flex-column-reverse gap-2 flex-md-row py-3">
                    <div class="d-grid d-md-block gap-2">
                        <a href="{{ route('admin.drugs.index') }}" class="btn btn-danger font-weight-bold">
                            <span data-feather="arrow-left" class="align-text-middle me-1"></span>
                            Batal</a>
                        <button type="reset" class="btn btn-warning">
                            <span data-feather="refresh-cw" class="align-text-middle me-1"></span>
                            Reset
                        </button>
                    </div>
                    <div class="d-grid d-md-block gap-2">
                        <button type="submit" class="btn btn-primary">
                            <span data-feather="save" class="align-text-middle me-1"></span>
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>