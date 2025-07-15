<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav
                class="border-b border-gray-100 bg-white"
            >
                <!-- Primary Navigation Menu -->
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 justify-between">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex shrink-0 items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    />
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
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-blue-500 text-gray-900': route().current('spells') || route().current('spell') || route().current('powers') || route().current('power'),
                                    }"
                                >
                                    <span class="cursor-pointer">Cast</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-white rounded-md shadow-lg group-hover:block" style="top: 45px;">
                                        <NavLink
                                            :href="route('spells')"
                                            :active="route().current('spells') || route().current('spell')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >
                                            Spells
                                        </NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('powers')"
                                            :active="route().current('powers') || route().current('power')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >
                                            Powers
                                        </NavLink>
                                    </div>
                                </div>

                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-blue-500 text-gray-900': route().current('feats') || route().current('feat') || route().current('talents') || route().current('talent'),
                                    }"
                                >
                                    <span class="cursor-pointer">Prowess</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-white rounded-md shadow-lg group-hover:block" style="top: 45px;">
                                        <NavLink
                                            :href="route('feats')"
                                            :active="route().current('feats') || route().current('feat')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Feats</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('talents')"
                                            :active="route().current('talents') || route().current('talent')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Talents</NavLink>
                                    </div>
                                </div>

                                <NavLink
                                    :href="route('gods')"
                                    :active="route().current('gods') || route().current('god')"
                                >Gods</NavLink>

                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-blue-500 text-gray-900': route().current('equipments') || route().current('equipment')
                                            || route().current('armors') || route().current('armor')
                                            || route().current('formulas') || route().current('formula'),
                                    }"
                                >
                                    <span class="cursor-pointer">Equipment</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-white rounded-md shadow-lg group-hover:block" style="top: 45px;">
                                        <NavLink
                                            :href="route('armors')"
                                            :active="route().current('armors') || route().current('armor')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Armors</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('weapons')"
                                            :active="route().current('weapons') || route().current('weapon')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Weapons</NavLink>
                                        <br/>
                                        <NavLink
                                            :href="route('formulas')"
                                            :active="route().current('formulas') || route().current('formula')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Formulas</NavLink>
                                    </div>
                                </div>
                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-blue-500 text-gray-900': route().current('equipments') || route().current('equipment')
                                            || route().current('rules') || route().current('rule')
                                            || route().current('skills') || route().current('skill')
                                            || route().current('conditions') || route().current('condition'),
                                    }"
                                >
                                    <span class="cursor-pointer">Rules</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-white rounded-md shadow-lg group-hover:block" style="top: 45px;">
                                        <NavLink
                                            :href="route('conditions')"
                                            :active="route().current('conditions') || route().current('condition')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Conditions</NavLink>
                                        <NavLink
                                            :href="route('skills')"
                                            :active="route().current('skills') || route().current('skill')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Skills</NavLink>
                                    </div>
                                </div>
                                <div
                                    class="group relative inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out"
                                    :class="{
                                        'border-b-2 border-blue-500 text-gray-900': route().current('equipments') || route().current('equipment')
                                            || route().current('races') || route().current('race')
                                            || route().current('alphabets') || route().current('alphabet')
                                            || route().current('languages') || route().current('language'),
                                    }"
                                >
                                    <span class="cursor-pointer">Races</span>
                                    <div class="absolute left-0 hidden w-48 mt-2 bg-white rounded-md shadow-lg group-hover:block" style="top: 45px;">
                                        <NavLink
                                            :href="route('races')"
                                            :active="route().current('races') || route().current('race')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Races</NavLink>
                                        <NavLink
                                            :href="route('alphabets')"
                                            :active="route().current('alphabets') || route().current('alphabet')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Alphabets</NavLink>
                                        <NavLink
                                            :href="route('languages')"
                                            :active="route().current('languages') || route().current('language')"
                                            class="block px-4 py-2 text-sm text-gray-700 w-48 bg-gray-200 hover:bg-gray-300 hover:text-gray-900"
                                        >Languages</NavLink>
                                    </div>
                                </div>
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
                                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
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
                                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
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
                        class="border-t border-gray-200 pb-1 pt-4"
                    >
                        <div class="px-4">
                            <div
                                class="text-base font-medium text-gray-800"
                            >
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="text-sm font-medium text-gray-500">
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
                class="bg-white shadow"
                v-if="$slots.header"
            >
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
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
