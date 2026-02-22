{{-- Team Section Partial --}}
<div class="team-section scroll-animate-zoom" style="margin-bottom: 60px;">
    <h3 class="team-category-title">{{ $sectionTitle }}</h3>

    @if($description)
        <p style="text-align: center; max-width: 800px; margin: 0 auto 30px; color: #666;">{{ $description }}</p>
    @endif

    @if($displayType === 'card-grid')
        {{-- Card Grid Display --}}
        <div class="staff-grid">
            @foreach($staffMembers as $k => $staff)
                <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $staff->id }}')">
                    <div class="team-image-container">
                        <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}"
                             alt="{{ $staff->name }}" class="team-image">
                    </div>
                    <div class="team-content">
                        @if($staff->position)
                            <div class="team-title">{{ $staff->position }}</div>
                        @endif
                        <h4 class="team-name">{{ $staff->name }}</h4>
                        @if($staff->description)
                            <div class="team-qualification">{{ $staff->description }}</div>
                        @endif
                    </div>
                    @if($staff->bio)
                        <div class="expand-icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="team-details" id="staff{{ $staff->id }}">
                            <p><strong>{{ $categoryName }}</strong></p>
                            <p>{!! nl2br(e($staff->bio)) !!}</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

    @elseif($displayType === 'individual-cards')
        {{-- Individual Cards (for management positions) --}}
        <div class="row justify-content-center">
            @foreach($staffMembers as $k => $staff)
                <div class="col-md-4">
                    <div class="team-card" style="cursor: pointer; position: relative;" onclick="toggleStaffDetails('staff{{ $staff->id }}')">
                        <div class="team-image-container">
                            <img src="{{ $staff->image ? asset('Uploads/staff_images/'.$staff->image) : asset('Uploads/staff_images/default-user.png') }}"
                                 alt="{{ $staff->name }}" class="team-image">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name">{{ $staff->name }}</h4>
                            @if($staff->description)
                                <div class="team-qualification">{{ $staff->description }}</div>
                            @endif
                        </div>
                        @if($staff->bio)
                            <div class="expand-icon">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="team-details" id="staff{{ $staff->id }}">
                                <p><strong>{{ $categoryName }}</strong></p>
                                <p>{!! nl2br(e($staff->bio)) !!}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    @elseif($displayType === 'name-list')
        {{-- Name List Display (for Senior Care Assistants) --}}
        <div class="row justify-content-center">
            @foreach($staffMembers as $staff)
                <div class="col-md-3 col-sm-6 text-center mb-3">
                    <h5 style="font-weight: 600; color: #2C3E50;">
                        {{ $staff->name }}
                    </h5>
                    @if($staff->description)
                        <p style="font-size: 13px; color: #777;">{{ $staff->description }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
