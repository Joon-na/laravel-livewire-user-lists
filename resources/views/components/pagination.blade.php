<div class="row">
    <div class="row col-6">
        Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items
    </div>
    <div class="row col-6">
        {{ $items->links() }}
    </div>
</div>
