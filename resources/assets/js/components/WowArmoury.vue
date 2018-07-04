<template>
    <div class="p-4 shadow mb-4 w-full" :class="applicationClass">
        <h1 class="font-thin tracking-wide text-xl mb-2">
            <span v-if="character">
                {{ character.name }}
            </span>

            <span v-else>
                {{ application.character_name }}
            </span>

            <small class="font-thin tracking-wide text-sm">
                {{ application.battlenet }}
            </small>
        </h1>

        <p class="text-sm mb-2" v-if="character">
            {{ character.level }} {{ className }}
            iLevel: {{ character.items.averageItemLevelEquipped }} / {{ character.items.averageItemLevel }}
        </p>

        <p class="text-sm mb-2" v-if="character">
            {{ character.realm }}
        </p>

        <div class="flex justify-end">
            <a class="no-underline text-right"
               :class="application.status === 0 ? 'text-brand hover:text-brand-dark' : 'text-white hover:text-grey-light'"
               :href="'/admin/applications/' + application.id"
            >
                View
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            application: {
                type: Object,
                required: true,
            },
        },
        computed: {
            applicationClass() {
                if (this.application.status === 1) {
                    return {'bg-red': true, 'text-white': true}
                }

                if (this.application.status === 2) {
                    return {'bg-green': true, 'text-white': true}
                }

                return {'bg-grey-lighter': true}
            },
            className() {
                let self = this

                let wowClass = _.find(self.classes, function (o) {
                    return o.id === self.character.class
                })

                return wowClass.name
            },
        },
        data() {
            return {
                character: null,
                classes: [
                    {
                        'id': 1,
                        'name': 'Warrior',
                    },
                    {
                        'id': 2,
                        'name': 'Paladin',
                    },
                    {
                        'id': 3,
                        'name': 'Hunter',
                    },
                    {
                        'id': 4,
                        'name': 'Rogue',
                    },
                    {
                        'id': 5,
                        'name': 'Priest',
                    },
                    {
                        'id': 6,
                        'name': 'Death Knight',
                    },
                    {
                        'id': 7,
                        'name': 'Shaman',
                    },
                    {
                        'id': 8,
                        'name': 'Mage',
                    },
                    {
                        'id': 9,
                        'name': 'Warlock',
                    },
                    {
                        'id': 10,
                        'name': 'Monk',
                    },
                    {
                        'id': 11,
                        'name': 'Druid',
                    },
                    {
                        'id': 12,
                        'name': 'Demon Hunter',
                    },
                ],
            }
        },
        mounted() {
            let self = this

            let base = 'https://eu.api.battle.net/wow/character/'

            let queryString = '?fields=items&locale=en_GB&apikey=mwp27kuyj5bde34eb8rftk5aez3aqmxf'

            if (this.application.realm && this.application.character_name) {
                axios.get(base + this.application.realm + '/' + this.application.character_name + queryString)
                    .then(function (response) {
                        self.character = response.data
                    })
                    .catch(function (error) {

                    })
            }
        },
    }
</script>
