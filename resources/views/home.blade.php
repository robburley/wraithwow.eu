@extends('layouts.app')

@section('content')
    <div class="w-full min-h-screen bg-cover pt-16 md:pt-64 pb-8"
         style="background-image: url('https://stmed.net/sites/default/files/world-of-warcraft%3A-battle-for-azeroth-hd-wallpapers-33910-1964358.jpg') ">
        <div class="container mx-auto pt-16 md:pt-64">
            <div class="bg-white p-4 rounded">
                <h4 class="mb-4 text-2xl font-thin">
                    About Wraith | Draenor | EU
                </h4>

                <p class="mb-4">
                    Wraith is a two-day per week raiding guild on Draenor EU. The core of the guild is a group
                    of players who have played together since Vanilla, and have excelled in both PvE and PvP.
                </p>

                <p class="mb-4 hidden md:flex">
                    The guild consists of players who have raided hardcore, including some who have raided in
                    world-first guilds, but no longer have the time to commit to five raids per week due to jobs,
                    families, etc.
                </p>

                <p class="mb-4 hidden md:flex">
                    Although we only raid twice a week, we make the most of those hours, focusing hard and achieving
                    top progress in a short amount of time. Recent progress includes all raid tiers of Legion fully
                    cleared on Mythic difficulty, comfortably ahead of the next instance release. We don't do clears
                    on separate raid days, so the short ammount we raid per week is incredibly valuable to us. We
                    have kept up steady progression while working with this style and feel a good sense of
                    completion with such a small time frame.
                </p>

                <p class="mb-4 hidden md:flex">
                    This can however only happen when people do their own research on encounters beforehand, we
                    expect you to have a decent idea of how to execute an encounter without the need for an in-depth
                    powerpoint presentation before every new encounter.
                </p>

                <h4 class="mb-4 text-2xl font-thin">
                    Raiding Times
                </h4>

                <p class="mb-4">
                    Wednesday: 19:30 to 23:00 (server time)
                </p>
                <p class="mb-4">
                    Sunday: 19:30 to 23:00 (server time)
                </p>

                <p class="mb-4 hidden md:flex">
                    We are one of the few advertised two-days per week guilds that actually raid two-days per week.
                    We do not extend beyond 23:00, we do not add extra raid days.
                </p>

                <h4 class="mb-4 text-2xl font-thin">
                    Recruitment
                </h4>

                <p class="mb-4">
                    We are now looking towards BFA and are recruiting active players of all classes/roles. We are
                    particularly interested in players that are capable of playing multiple classes/roles and can
                    prove this.
                </p>

                <div class="flex justify-center">
                    <a class="p-4 no-underline rounded text-brand-lightest bg-brand-dark hover:text-brand-dark hover:bg-brand-lightest border border-transparent hover:border-brand-dark"
                       href="{{ url('/apply') }}"
                    >
                        Apply now
                    </a>
                </div>
            </div>
        </div>
    </div>

    <raid-progress></raid-progress>
@endsection
