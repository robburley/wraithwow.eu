<template>
    <div class="w-full flex flex-col md:flex-row justify-center items-center bg-black p-4 text-brand-lightest">
        <div class="flex flex-col justify-center items-center px-4 mb-8 md:mb-0">
            <img src="//cdnassets.raider.io/images/antorus-the-burning-throne/icon.jpg">
            <h4 class="p-4 font-thin text-center">Antorus, the Burning Throne</h4>
            <p v-if="guild">{{ guild.raid_progression['antorus-the-burning-throne'].summary }}</p>
        </div>

        <div class="flex flex-col justify-center items-center px-4 mb-8 md:mb-0">
            <img src="//cdnassets.raider.io/images/tomb-of-sargeras/icon.jpg">
            <h4 class="p-4 font-thin text-center">Tomb of Sargeras</h4>
            <p v-if="guild">{{ guild.raid_progression['tomb-of-sargeras'].summary }}</p>
        </div>

        <div class="flex flex-col justify-center items-center px-4 mb-8 md:mb-0">
            <img src="//cdnassets.raider.io/images/the-nighthold/icon.jpg">
            <h4 class="p-4 font-thin text-center">The Nighthold</h4>
            <p v-if="guild">{{ guild.raid_progression['the-nighthold'].summary }}</p>
        </div>

        <div class="flex flex-col justify-center items-center px-4 mb-8 md:mb-0">
            <img src="//cdnassets.raider.io/images/trial-of-valor/icon.jpg">
            <h4 class="p-4 font-thin text-center">Trial of Valor</h4>
            <p v-if="guild">{{ guild.raid_progression['trial-of-valor'].summary }}</p>
        </div>

        <div class="flex flex-col justify-center items-center px-4 mb-8 md:mb-0">
            <img src="//cdnassets.raider.io/images/the-emerald-nightmare/icon.jpg">
            <h4 class="p-4 font-thin text-center">The Emerald Nightmare</h4>
            <p v-if="guild">{{ guild.raid_progression['the-emerald-nightmare'].summary }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'guild': null,
            }
        },
        created() {
            let self = this

            axios.get('https://raider.io/api/v1/guilds/profile?region=eu&realm=Draenor&name=wraith&fields=raid_progression')
                .then(function (response) {
                    self.guild = response
                })
                .catch(function (error) {
                    self.guild = {'name': 'Wraith', 'faction': 'horde', 'region': 'eu', 'realm': 'Draenor', 'profile_url': 'https://raider.io/guilds/eu/Draenor/Wraith', 'raid_progression': {'the-emerald-nightmare': {'summary': '7/7 M', 'total_bosses': 7, 'normal_bosses_killed': 7, 'heroic_bosses_killed': 7, 'mythic_bosses_killed': 7}, 'trial-of-valor': {'summary': '3/3 M', 'total_bosses': 3, 'normal_bosses_killed': 3, 'heroic_bosses_killed': 3, 'mythic_bosses_killed': 3}, 'the-nighthold': {'summary': '10/10 M', 'total_bosses': 10, 'normal_bosses_killed': 10, 'heroic_bosses_killed': 10, 'mythic_bosses_killed': 10}, 'tomb-of-sargeras': {'summary': '9/9 M', 'total_bosses': 9, 'normal_bosses_killed': 9, 'heroic_bosses_killed': 9, 'mythic_bosses_killed': 9}, 'antorus-the-burning-throne': {'summary': '11/11 M', 'total_bosses': 11, 'normal_bosses_killed': 11, 'heroic_bosses_killed': 11, 'mythic_bosses_killed': 11}}}
                })
        },
    }
</script>
