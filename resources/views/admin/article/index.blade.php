<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Articles</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <body>
    <style>
                body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
            }
            .table-wrapper {
                background: #fff;
                padding: 20px 25px;
                margin: 30px 0;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
                padding-bottom: 15px;
                background: #435d7d;
                color: #fff;
                padding: 16px 30px;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }
            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }
            .table-title .btn-group {
                float: right;
            }
            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }
            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }
            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
                vertical-align: middle;
            }
            table.table tr th:first-child {
                width: 60px;
            }
            table.table tr th:last-child {
                width: 100px;
            }
            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }
            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
            }
            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
                outline: none !important;
            }
            table.table td a:hover {
                color: #2196F3;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #F44336;
            }
            table.table td i {
                font-size: 19px;
            }
            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }
            .pagination {
                float: right;
                margin: 0 0 5px;
            }
            .pagination li a {
                border: none;
                font-size: 13px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }
            .pagination li a:hover {
                color: #666;
            }
            .pagination li.active a, .pagination li.active a.page-link {
                background: #03A9F4;
            }
            .pagination li.active a:hover {
                background: #0397d6;
            }
            .pagination li.disabled i {
                color: #ccc;
            }
            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }
            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 13px;
            }
            /* Custom checkbox */
            .custom-checkbox {
                position: relative;
            }
            .custom-checkbox input[type="checkbox"] {
                opacity: 0;
                position: absolute;
                margin: 5px 0 0 3px;
                z-index: 9;
            }
            .custom-checkbox label:before{
                width: 18px;
                height: 18px;
            }
            .custom-checkbox label:before {
                content: '';
                margin-right: 10px;
                display: inline-block;
                vertical-align: text-top;
                background: white;
                border: 1px solid #bbb;
                border-radius: 2px;
                box-sizing: border-box;
                z-index: 2;
            }
            .custom-checkbox input[type="checkbox"]:checked + label:after {
                content: '';
                position: absolute;
                left: 6px;
                top: 3px;
                width: 6px;
                height: 11px;
                border: solid #000;
                border-width: 0 3px 3px 0;
                transform: inherit;
                z-index: 3;
                transform: rotateZ(45deg);
            }
            .custom-checkbox input[type="checkbox"]:checked + label:before {
                border-color: #03A9F4;
                background: #03A9F4;
            }
            .custom-checkbox input[type="checkbox"]:checked + label:after {
                border-color: #fff;
            }
            .custom-checkbox input[type="checkbox"]:disabled + label:before {
                color: #b8b8b8;
                cursor: auto;
                box-shadow: none;
                background: #ddd;
            }
            /* Modal styles */
            .modal .modal-dialog {
                max-width: 400px;
            }
            .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                padding: 20px 30px;
            }
            .modal .modal-content {
                border-radius: 3px;
            }
            .modal .modal-footer {
                background: #ecf0f1;
                border-radius: 0 0 3px 3px;
            }
            .modal .modal-title {
                display: inline-block;
            }
            .modal .form-control {
                border-radius: 2px;
                box-shadow: none;
                border-color: #dddddd;
            }
            .modal textarea.form-control {
                resize: vertical;
            }
            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }
            .modal form label {
                font-weight: normal;
            }
    </style>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2> <b>Articles</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Article</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
						#
						</th>
                        <th>Text</th>
                        <th>Status</th>
						<th>Reading limit</th>
						<th>Token</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $key=>$item)
                    <tr>
                        <td>{{ $key+1 }}</td>

                        <td>{{ Str::limit($item->text, $limit = 20, $end = '...') }}
                        </td>
                        <td>{{ $item->status==1 ? 'active' : 'deactive' }}</td>
						<td>{{ $item->reading_limit }}</td>
						<td>{{ $item->token }}</td>
                        <td>
                            <a href="#editEmployeeModal" data-id="{{ $item->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" data-id="{{ $item->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
			<div class="clearfix">
                Showing <b>{{ $articles->firstItem() }}</b> to <b>{{ $articles->lastItem() }}</b> of <b>{{ $articles->total() }}</b> entries
                <ul class="pagination">
                    @if($articles->currentPage() <= 3)
                        {{ $articles->links() }}
                    @else
                        <a href="{{ $articles->url(1) }}">1</a>
                        <a href="{{ $articles->url(2) }}">2</a>
                        <a href="{{ $articles->url(3) }}">3</a>
                        <span>...</span>
                        <a href="{{ $articles->url($articles->currentPage()) }}">{{ $articles->currentPage() }}</a>
                        <a href="{{ $articles->url($articles->currentPage() + 1) }}">Next</a>
                    @endif
                </ul>
            </div>

        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="">
                    @csrf
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Text</label>
							<input type="text" name="text" class="form-control" required>
						</div>

                        <div class="form-group">
							<label>Reading Limit</label>
							<input type="number" name="reading_limit" class="form-control" >
						</div>

                        <div class="form-group">
							<label>Status</label>
                            <select class="form-control" name="status" id="">
                                <option value="0">Deactive</option>
                                <option value="1">Active</option>
                            </select>
						</div>

					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="updateForm" action="" method="POST">
                    @csrf
                    @method('PUT')
					<div class="modal-header">
						<h4 class="modal-title">Edit Article</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<div class="modal-body">
						<div class="form-group">
							<label>Text</label>
							<input type="text" name="text" class="form-control" required>
						</div>

                        <div class="form-group">
							<label>Reading Limit</label>
							<input type="number" name="reading_limit" class="form-control" >
						</div>

                        <div class="form-group">
							<label>Status</label>
                            <select class="form-control" name="status" id="">
                                <option value="0">Deactive</option>
                                <option value="1">Active</option>
                            </select>
						</div>
                    </div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
					<div class="modal-header">
						<h4 class="modal-title">Delete Article</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete these Article?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>


<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Article</th>
                              <th scope="col">View Count</th>
                              <th scope="col">View Time</th>
                              <th scope="col">IP</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($qr_views as $key=>$qr)
                            <tr>
                              <th scope="row">{{ $key+1 }}</th>
                                <td>
                                    @if (!is_null($qr->getArticle))
                                        {{ $qr->getArticle->text }}
                                    @else
                                       Article deleted
                                    @endif
                                </td>
                              <td>{{ $qr->view_count }}</td>
                              <td>{{ $qr->view_time }}</td>
                              <td>{{ $qr->ip }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
</div>
    <script>
        $(document).ready(function(){
	        // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.edit').click(function() {
                var articleId = $(this).data('id');
                var link = "{{ route('articles.update', ':id') }}";
                link = link.replace(':id', articleId);

                var link_articles = "{{ route('articles.edit', ':id') }}";
                link_articles = link_articles.replace(':id', articleId);

                $.get(link_articles, function(data) {
                    $('#updateForm input[name="text"]').val(data.text);
                    $('#updateForm input[name="reading_limit"]').val(data.reading_limit);
                    $('#updateForm select[name="status"]').val(data.status);
                });

                $('#updateForm').attr('action', link);
            });
            });

    </script>

<script>
       $('.delete').click(function() {
                var articleId = $(this).data('id');
                var link = "{{ route('articles.destroy', '') }}/" + articleId;
                console.log(link);
                $('#deleteForm').attr('action', link);
            });
</script>
</body>
</html>
