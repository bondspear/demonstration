
<h4>Leave your comment</h4>
              <form id="commentform" action="{{ route('comment.store') }}" method="POST" name="comment-form">
              @csrf
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="row">
                  <div class="span4">
                    
                  </div>
                  <div class="span8 margintop10">
                    <p>
                      <textarea rows="12" name="text"  class="input-block-level" placeholder="*Your comment here"></textarea>
                    </p>
                    <p>
                      <button class="btn btn-theme margintop10" type="submit">Submit comment</button>
                    </p>
                  </div>
                </div>
              </form>


