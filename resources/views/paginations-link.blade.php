
@if ($paginator->hasPages())

<div class="container">
   
    <ul class="row justify-content-between">
        @if ($paginator->onFirstPage())
        <li class="list-group-item" >Prev</li > 
        @else
            <button class="list-group-item" wire:click="previousPage">Prev</button > 
        @endif

        @if ($paginator->hasMorePages())
            <li class="list-group-item" wire:click="nextPage">Next</li>              
        @else
            <li class="list-group-item">Next</li>
        @endif
    </ul>
 
</div>

@endif


