@section('page-top')
    <div class="col-xs-8">
        <h1 class="page-title">Create Category</h1>
    </div>
@endsection

<div class="panel-body">
    {{ Form::open(['method'=>'POST', 'route'=>'product.category.store', 'id'=>'createProductCategory']) }}
        @include('admin.products.categories.form')
    {{ Form::close() }}
</div>