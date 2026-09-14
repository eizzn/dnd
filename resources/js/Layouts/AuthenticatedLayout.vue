<script setup>
import { ref } from 'vue';
import Dropdown from '@/components/Dropdown.vue';
import DropdownLink from '@/components/DropdownLink.vue';
import NavLink from '@/components/NavLink.vue';
import ResponsiveNavLink from '@/components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-stone-900">
            <nav
                class="border-b border-stone-700 bg-stone-950"
            >
                <!-- Primary Navigation Menu -->
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 justify-between">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex shrink-0 items-center">
                                <Link :href="route('dashboard')" class="font-display text-lg font-semibold tracking-widest text-amber-400 hover:text-amber-300 transition-colors">
                                    ⚔ MyPF
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"
                            >
                                <NavLink
                                    :href="route('dashboard')"
                                    :active="route().current('dashboard')"
                                >
                                    Dashboard
                                </NavLink>
                                <NavLink
                                    :href="route('classes')"
                                    :active="route().current('classes') || route().current('class')"
                                >Classes</NavLink>

                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-stone-400 hover:text-amber-400 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-amber-500 text-amber-400': route().current('spells') || route().current('spell') || route().current('powers') || route().current('power'),
                                    }"
                                >
                                    <span class="cursor-pointer">Cast</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-stone-900 border border-stone-700 rounded-md shadow-xl group-hover:block z-50" style="top: 45px;">
                                        <NavLink
                                            :href="route('spells')"
                                            :active="route().current('spells') || route().current('spell')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >
                                            Spells
                                        </NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('powers')"
                                            :active="route().current('powers') || route().current('power')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >
                                            Powers
                                        </NavLink>
                                    </div>
                                </div>

                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-stone-400 hover:text-amber-400 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-amber-500 text-amber-400': route().current('feats') || route().current('feat') || route().current('talents') || route().current('talent'),
                                    }"
                                >
                                    <span class="cursor-pointer">Prowess</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-stone-900 border border-stone-700 rounded-md shadow-xl group-hover:block z-50" style="top: 45px;">
                                        <NavLink
                                            :href="route('feats')"
                                            :active="route().current('feats') || route().current('feat')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Feats</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('talents')"
                                            :active="route().current('talents') || route().current('talent')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Talents</NavLink>
                                    </div>
                                </div>

                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-stone-400 hover:text-amber-400 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-amber-500 text-amber-400': route().current('gods') || route().current('god')
                                            || route().current('pantheons') || route().current('pantheon'),
                                    }"
                                >
                                    <span class="cursor-pointer">Gods</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-stone-900 border border-stone-700 rounded-md shadow-xl group-hover:block z-50" style="top: 45px;">
                                        <NavLink
                                            :href="route('gods')"
                                            :active="route().current('gods') || route().current('god')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Gods</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('pantheons')"
                                            :active="route().current('pantheons') || route().current('pantheon')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Pantheons</NavLink>
                                    </div>
                                </div>

                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-stone-400 hover:text-amber-400 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-amber-500 text-amber-400': route().current('equipments') || route().current('equipment')
                                            || route().current('armors') || route().current('armor')
                                            || route().current('weapons') || route().current('weapon')
                                            || route().current('formulas') || route().current('formula')
                                            || route().current('materials') || route().current('material')
                                    }"
                                >
                                    <span class="cursor-pointer">Equipment</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-stone-900 border border-stone-700 rounded-md shadow-xl group-hover:block z-50" style="top: 45px;">
                                        <NavLink
                                            :href="route('equipments')"
                                            :active="route().current('equipments') || route().current('equipment')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Equipments</NavLink>
                                        <NavLink
                                            :href="route('armors')"
                                            :active="route().current('armors') || route().current('armor')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Armors</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('weapons')"
                                            :active="route().current('weapons') || route().current('weapon')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Weapons</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('formulas')"
                                            :active="route().current('formulas') || route().current('formula')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Formulas</NavLink>
                                        <NavLink
                                            :href="route('materials')"
                                            :active="route().current('materials') || route().current('material')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Materials</NavLink>
                                    </div>
                                </div>
                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-stone-400 hover:text-amber-400 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-amber-500 text-amber-400': route().current('features') || route().current('feature')
                                            || route().current('skills') || route().current('skill')
                                            || route().current('conditions') || route().current('condition')
                                            || route().current('types') || route().current('type')
                                            || route().current('pages') || route().current('page')
                                    }"
                                >
                                    <span class="cursor-pointer">Rules</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-stone-900 border border-stone-700 rounded-md shadow-xl group-hover:block z-50" style="top: 45px;">
                                        <NavLink
                                            :href="route('pages')"
                                            :active="route().current('pages') || route().current('page')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Rules</NavLink>
                                        <NavLink
                                            :href="route('features')"
                                            :active="route().current('features') || route().current('feature')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Features</NavLink>
                                        <NavLink
                                            :href="route('conditions')"
                                            :active="route().current('conditions') || route().current('condition')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Conditions</NavLink>
                                        <NavLink
                                            :href="route('skills')"
                                            :active="route().current('skills') || route().current('skill')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Skills</NavLink>
                                        <NavLink
                                            :href="route('types')"
                                            :active="route().current('types') || route().current('type')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Types</NavLink>
                                    </div>
                                </div>
                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-stone-400 hover:text-amber-400 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-amber-500 text-amber-400': route().current('races') || route().current('race')
                                            || route().current('alphabets') || route().current('alphabet')
                                            || route().current('languages') || route().current('language')
                                            || route().current('templates') || route().current('template'),
                                    }"
                                >
                                    <span class="cursor-pointer">Races</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-stone-900 border border-stone-700 rounded-md shadow-xl group-hover:block z-50" style="top: 45px;">
                                        <NavLink
                                            :href="route('races')"
                                            :active="route().current('races') || route().current('race')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Races</NavLink>
                                        <NavLink
                                            :href="route('alphabets')"
                                            :active="route().current('alphabets') || route().current('alphabet')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Alphabets</NavLink>
                                        <NavLink
                                            :href="route('languages')"
                                            :active="route().current('languages') || route().current('language')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Languages</NavLink>
                                        <NavLink
                                            :href="route('templates')"
                                            :active="route().current('templates') || route().current('template')"
                                            class="block px-4 py-2 text-sm text-stone-300 w-48 hover:bg-stone-800 hover:text-amber-400 transition-colors duration-100"
                                        >Templates</NavLink>
                                    </div>
                                </div>
                                <NavLink
                                    :href="route('monsters')"
                                    :active="route().current('monsters') || route().current('monster')"
                                >Monsters</NavLink>
                                <!--
                                monsters
                                locations
                                organizations
                                equipment
                                    miscellaneous
                                    materials
                                skills
                                rules
                                    types
                                    rules
                                    templates
                                characters
                                -->
                            </div>
                        </div>

                        <div class="hidden sm:ms-6 sm:flex sm:items-center">
                            <!-- Settings Dropdown -->
                            <div class="relative ms-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center rounded-md border border-stone-700 bg-stone-800 px-3 py-2 text-sm font-medium leading-4 text-stone-300 transition duration-150 ease-in-out hover:text-amber-400 hover:border-amber-600 focus:outline-none"
                                            >
                                                {{ $page.props.auth.user.name }}

                                                <svg
                                                    class="-me-0.5 ms-2 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink
                                            :href="route('profile.edit')"
                                        >
                                            Profile
                                        </DropdownLink>
                                        <DropdownLink
                                            :href="route('logout')"
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="inline-flex items-center justify-center rounded-md p-2 text-stone-400 transition duration-150 ease-in-out hover:bg-stone-800 hover:text-amber-400 focus:bg-stone-800 focus:text-amber-400 focus:outline-none"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <div class="space-y-1 pb-3 pt-2">
                        <ResponsiveNavLink
                            :href="route('dashboard')"
                            :active="route().current('dashboard')"
                        >
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div
                        class="border-t border-stone-700 pb-1 pt-4"
                    >
                        <div class="px-4">
                            <div
                                class="text-base font-medium text-amber-400"
                            >
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-stone-400">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')">
                                Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header
                class="bg-stone-900 border-b border-stone-700 shadow-lg"
                v-if="$slots.header"
            >
                <div class="mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
