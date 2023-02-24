<h1>Subpage</h1>
<form action="{{ route('subpage.click', ['campaign_id' => $campaign->id]) }}" method="POST">
    @csrf
    <button type="submit">Click Me  {{$campaign->id}}</button>
</form>
