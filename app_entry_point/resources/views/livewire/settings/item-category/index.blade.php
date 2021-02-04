<div class="col-lg-9">
    <div class="mb-4 card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">

            </div>
            <div id="no-more-tables">
            <div class="table-responsive">
                @include('livewire.settings.delivery.search_input')
                <table id="" class="table table-striped table-bordered nowrap text-md-nowrap">
                    <thead>
                        <tr>
                            <th class="border-bottom-0">Category</th>
                            <th class="border-bottom-0">Created On</th>
                            <th class="border-bottom-0">Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item_categories as $category)
                        <tr>
                            <td>{{ ucfirst($category->cat_type) }}</td>
                            <td>{{ date( ('l jS \\of F Y'), strtotime($category->created_at) ) }}</td>
                            <td>{{ date( ('l jS \\of F Y'), strtotime($category->updated_at) ) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex-row">
                    <div class="float-right mt-4 float-sm-left" >
                        {{ $item_categories->links() }}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

