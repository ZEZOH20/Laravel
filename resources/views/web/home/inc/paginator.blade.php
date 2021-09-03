                 @if($paginator->hasPages())
                            <!-- pagination -->
							<div class="col-md-12">
								<div class="post-pagination">
                                   @if($paginator->onFirstPage())
									  <a href="{{$paginator->lastPage()}}" class="pagination-back pull-left btn disabled">Back</a>
                                   @else
                                   <a href="{{$paginator->lastPage()}}" class="pagination-back pull-left">Back</a>
                                   @endif
                                   <!-- Hard Code -->
                                   <!--is_array() .....array of links -->
									<ul class="pages">
                                     @foreach ($elements as $element)
                                       @if(is_array($element))
                                        @foreach($element as $page =>$url)
                                           @if($page ==$paginator->currentPage() )
                                            <li class="active">{{$page}}</li>
                                            @else
                                             <li><a href="{{$url}}">{{$page}}</a></li>
                                             @endif
                                        @endforeach
                                        @endif
                                        @endforeach
									</ul>
                                    <!-- Hard Code -->
                                    @if(!$paginator->hasMorePages())
                                    <a href="{{$paginator->nextPageUrl()}}" class="pagination-next pull-right btn disabled">Next</a>
                                   @else
                                   <a href="{{$paginator->nextPageUrl()}}" class="pagination-next pull-right">Next</a>
                                   @endif

								</div>
							</div>
							<!-- pagination -->
                @endif
