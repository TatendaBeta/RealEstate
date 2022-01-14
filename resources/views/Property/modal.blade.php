<div class="modal fade" id="{{$item->id}}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add to
                    Waiting
                    List
                 
                </h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                Do you want to be added to the waiting list for this
                property?
                <ul>
                    <li> {{$item->Description}}</li>
                    <li>  {{$item->location}}</li>
                    <li>  ${{$item->price}}</li>
                </ul>
               
              
                <br>

            </div>
            <div class="modal-footer">
                <form action="waitlist" method="post">
                    @csrf
                    <input name="property_id" id="p_id" type="hidden" value="{{$item->id}}" />
                    <button type="button" class="btn btn-danger"
                        data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>