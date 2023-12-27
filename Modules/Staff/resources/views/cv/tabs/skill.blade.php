<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#collapseExperience-" aria-expanded="false" aria-controls="collapseExperience-">
                        <i class="fas fa-plus"></i>
                        Thêm mới chuyên môn
                    </button>
                </div>
            </div>
            <div class="card-body collapse" id="collapseExperience-">
                <form class="default-form" method="POST"
                    action="{{ route('staff.skill.store',['cv_id'=>$cv_id]) }}">
                    @csrf
                    @include('staff::cv.tabs.includes.form-skill',['skill' => null])
                </form>
            </div>
        </div>

        @if(count($userSkills))
        @foreach($userSkills as $userSkill)
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">
                    #{{ $userSkill->numerical }} - {{ $userSkill->special_skill }}
                </h5>
            </div>
            <div class="card-body">
                <form class="default-form" method="POST"
                    action="{{ route('staff.skill.update',$userSkill->id) }}">
                    @csrf
                    @method('PUT')
                    @include('staff::cv.tabs.includes.form-skill',['skill' => $userSkill])
                </form>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>