<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col     {{ $errors->has('email') ? ' text-red' : '' }} ">
        {!! Form::label('email', 'Email address', array('class' => 'mb-4')) !!}

        {!! Form::text('email', null, array('class' => 'flex-1 py-2 px-4 border-b border-brand-darkest mb-4 md:mb-0', 'placeholder' => 'email@address.com')) !!}
    </div>

    <div class="px-4 flex flex-1 flex-col     {{ $errors->has('battlenet') ? ' text-red' : '' }} ">
        {!! Form::label('battlenet', 'Battle.net ID?', array('class' => 'mb-4')) !!}

        {!! Form::text('battlenet', null, array('class' => 'flex-1 py-2 px-4 border-b border-brand-darkest', 'placeholder' => '#Burley2244')) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col   {{ $errors->has('info') ? ' text-red' : '' }} ">
        {!! Form::label('info', 'Tell us a little about yourself: (Age, nationality, occupation etc)', array('class' => ' mb-2')) !!}

        {!! Form::textarea('info', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'Who are you and what do you want?', 'rows' => 4)) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col  {{ $errors->has('realm') ? ' text-red' : '' }} ">
        {!! Form::label('realm', 'Main Character Realm:', array('class' => 'mb-4')) !!}

        {!! Form::text('realm', null, array('class' => 'flex-1 py-2 px-4 border-b border-brand-darkest mb-4 md:mb-0', 'placeholder' => 'Draenor')) !!}
    </div>

    <div class="px-4 flex flex-1 flex-col   {{ $errors->has('character_name') ? ' text-red' : '' }} ">
        {!! Form::label('character_name', 'Main Character Name:', array('class' => 'mb-4')) !!}

        {!! Form::text('character_name', null, array('class' => 'flex-1 py-2 px-4 border-b border-brand-darkest', 'placeholder' => 'Bob')) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col  {{ $errors->has('armoury_url') ? ' text-red' : '' }} ">
        {!! Form::label('armoury_url', 'Link your armory here:', array('class' => 'mb-4')) !!}

        {!! Form::text('armoury_url', null, array('class' => 'flex-1 py-2 px-4 border-b border-brand-darkest mb-4 md:mb-0', 'placeholder' => 'http://eu.battle.net/wow/en/character/Draenor/Burleylol/advanced')) !!}
    </div>

    <div class="px-4 flex flex-1 flex-col   {{ $errors->has('warcraftlogs_url') ? ' text-red' : '' }} ">
        {!! Form::label('warcraftlogs_url', 'Warcraftlogs (if any) here:', array('class' => 'mb-4')) !!}

        {!! Form::text('warcraftlogs_url', null, array('class' => 'flex-1 py-2 px-4 border-b border-brand-darkest', 'placeholder' => 'https://www.warcraftlogs.com/rankings/character/3795821/latest')) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col   {{ $errors->has('why_us') ? ' text-red' : '' }} ">
        {!! Form::label('why_us', 'Why do you want to join Wraith?', array('class' => 'mb-4')) !!}

        {!! Form::textarea('why_us', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'Why the hell not?', 'rows' => 4)) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col   {{ $errors->has('ui') ? ' text-red' : '' }} ">
        {!! Form::label('ui', 'Upload a screenshot of your UI, link it here (Use Imgur) and tell us a bit about what addons you use:', array('class' => 'mb-4')) !!}

        {!! Form::textarea('ui', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'Is it pretty or functional? Why not both?', 'rows' => 4)) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col {{ $errors->has('alt') ? ' text-red' : '' }} ">
        {!! Form::label('alt', 'Are you capable of playing an alt at a decent level, and if so which class?', array('class' => 'mb-4')) !!}

        {!! Form::textarea('alt', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'What else can you play?', 'rows' => 4)) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col {{ $errors->has('class_info') ? ' text-red' : '' }} ">
        {!! Form::label('class_info', 'We expect people to play up to the potential of their class. Where do you go for class research?', array('class' => 'mb-4')) !!}

        {!! Form::textarea('class_info', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'What websites do you use?', 'rows' => 4)) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-col md:flex-row {{ $errors->has('attendance') ? ' text-red' : '' }} ">
        {!! Form::label('attendance', 'Currently we raid Wednesday and Sunday. We need reliable people and expect 90% attendance. Does this work out for you?', array('class' => 'mr-2 mb-2 md:mb-0 w-full md:w-1/2')) !!}

        <div class="w-full md:w-1/2">
            <div class="relative w-full">
                {!! Form::select('attendance', [true => 'Yes', false => 'No'], null, ['placeholder' => 'Choose', 'class' => 'block appearance-none w-full bg-grey-lightest border border-brand-darker text-grey-darker py-3 px-4 pr-8 rounded-none']) !!}

                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-col md:flex-row {{ $errors->has('attendance') ? ' text-red' : '' }} ">
        {!! Form::label('spec', 'We expect people to be willing to play whichever spec is currently the best for said class, if the gap of DPS between them is large (10%+) You must be willing to play any given spec within your role on any boss, whether it be for mechanics or for DPS. Understood?', array('class' => 'mr-2 mb-2 md:mb-0 w-full md:w-1/2')) !!}

        <div class="w-full md:w-1/2">
            <div class="relative w-full">
                {!! Form::select('spec', [true => 'Yes', false => 'No'], null, ['placeholder' => 'Choose', 'class' => 'block appearance-none w-full bg-grey-lightest border border-brand-darker text-grey-darker py-3 px-4 pr-8 rounded-none']) !!}

                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex  flex-col md:flex-row {{ $errors->has('sat') ? ' text-red' : '' }} ">
        {!! Form::label('sat', 'We aim to keep 23-25 people in our roster at any given time. On some fights this means people will be sat out. Any issues with this?', array('class' => 'mr-2 mb-2 md:mb-0 w-full md:w-1/2')) !!}

        <div class="w-full md:w-1/2">
            <div class="relative w-full">
                {!! Form::select('sat', [true => 'Yes', false => 'No'], null, ['placeholder' => 'Choose', 'class' => 'block appearance-none w-full bg-grey-lightest border border-brand-darker text-grey-darker py-3 px-4 pr-8 rounded-none']) !!}

                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col {{ $errors->has('raid_info') ? ' text-red' : '' }} ">
        {!! Form::label('raid_info', 'As we currently only raid 6 hours per week, we expect everyone to show up to boss fights and have a decent understanding of the boss mechanics and what they need to do. Where would you look up this information?', array('class' => 'mb-4')) !!}

        {!! Form::textarea('raid_info', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'What websites do you use?', 'rows' => 4)) !!}
    </div>
</div>

<div class="flex flex-col md:flex-row mb-8">
    <div class="px-4 flex flex-1 flex-col {{ $errors->has('raid_experience') ? ' text-red' : '' }} ">
        {!!Form::label('raid_experience', 'Previous raiding experience? Can be games other than WoW.', array('class' => 'mb-4')) !!}

        {!! Form::textarea('raid_experience', null, array('class' => 'flex-1 py-2 px-4 border border-brand-darkest', 'placeholder' => 'What have you done?', 'rows' => 4)) !!}
    </div>
</div>