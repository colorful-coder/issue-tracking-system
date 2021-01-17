<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Issue List
                </div>
                <hr>
                <br>
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Summary</th>
                            <th>Serverity</th>
                            <th>Priority</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($issues as $issue)
                        <tr>
                            <td>{{$issue->id}}</td>
                            <td>{{$issue->category}}</td>
                            <td>{{$issue->summary}}</td>
                            <td>{{$issue->severity}}</td>
                            <td>{{$issue->priority}}</td>
                            <td>{{$issue->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $issues->links() }}     
            </div>
        </div>
    </div>
</x-app-layout>