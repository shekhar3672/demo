 @foreach ($contacts as $con)
                    <tr id="{{$con->id}}">
                        <td>
                        {{ ++$i }}
                        </td>
                        <td>
                         {{$con->first_name}}
                        </td>
                        <td>
                          {{$con->last_name}}
                        </td>
                        <td>
                          {{ $con->email }}
                        </td>
                        <td>
                          {{ $con->primary_phone }}
                        </td>
                        
                         <td class="td-actions text-right">
                             <a href="{{ url('contact-details/'.$con->id) }}"><button type="button" rel="tooltip" title="show" data-id="{{$con->id}}" class="btn btn-warning btn-link btn-sm">
                           <i class="material-icons">remove_red_eye</i>
                          </button></a>
                          
                          <a href="{{ url('edit-contact/'.$con->id) }}"><button type="button"  rel="tooltip" title="Edit job" class="btn btn-success btn-link btn-sm " >
                            <i class="material-icons">edit</i></button></a>
                          </button>
                          <button type="button" rel="tooltip" title="Remove" data-id="{{$con->id}}" class="btn btn-danger btn-link btn-sm delete-con">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                    </tr>
                 @endforeach 

                  {!!$contacts->appends(Request::capture()->except('page'))->links('contacts/pagination')!!}