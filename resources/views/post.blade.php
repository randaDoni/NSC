@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                      <div class="col-12 preview">
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form id="frmStore">
                              <div>
                                  <h3 align="center">Unggah Artikel</h3>
                              </div>
                                <div class="form-group mb-2">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="row">
                                  <div class="form-group mb-2">
                                      <label>Caption</label>
                                      <textarea class="form-control" name="caption"></textarea>
                                  </div>
                                  <div class="form-group mb-2">
                                      <input type="file" class="form-control" name="upload">
                                  </div>
                                    <div class="col-12">
                                      <button type="submit" class="btn btn-primary">Unggah</button>
                                    </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
