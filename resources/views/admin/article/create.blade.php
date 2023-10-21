<div class="main_content_iner">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3>Profession</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard_breadcam text-end">
                                <p>
                                    <a href="{{ route('profession.index') }}">Profession</a>
                                    <i class="fas fa-caret-right"></i> Create
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <form method="POST">
                            @csrf
                            <div class="col-lg-12">
                                <div class="white_card card_height_100">
                                    <div class="white_card_body">
                                        <h6 class="card-subtitle mb-2">Profession Name</h6>
                                        <div class=" mb-0">
                                            <input type="text" name="name" class="form-control" id="inputText"
                                                placeholder="Profession" autocomplete="off" required>
                                            @error('name')
                                                <span class="text-danger my-2">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="white_card card_height_100">
                                    <div class="white_card_body">
                                        <h6 class="card-subtitle mb-2">Profession Degree</h6>
                                        <div class=" mb-0">
                                            <select name="degree" class="form-control">
                                                <option value="">Select Profession Degree</option>
                                                <option value="Bachelor">Bachelor</option>
                                                <option value="Master">Master</option>
                                                <option value="Phd">Phd</option>
                                            </select>
                                            @error('degree')
                                                <span class="text-danger my-2">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="white_card card_height_100">
                                    <div class="white_card_body">
                                        <button type="submit" class="btn btn-success mb3">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
