import ClassList from "@/Pages/Classes/ClassList.vue";
import ClassDetails from "@/Pages/Classes/ClassDetails.vue";
import FeatList from './Pages/Feats/FeatList.vue';
import FeatDetails from "@/Pages/Feats/FeatDetails.vue";
import GodList from './Pages/Gods/GodList.vue';
import GodDetails from "@/Pages/Gods/GodDetails.vue";
import PowerList from './Pages/Powers/PowerList.vue';
import PowerDetails from "@/Pages/Powers/PowerDetails.vue";
import SpellList from './Pages/Spells/SpellList.vue';
import SpellDetails from "@/Pages/Spells/SpellDetails.vue";
import TalentList from './Pages/Talents/TalentList.vue';
import TalentDetails from "@/Pages/Talents/TalentDetails.vue";

export default [
    {
        path: '/classes',
        name: 'ClassList',
        component: ClassList,
    },
    {
        path: '/class/:id',
        name: 'ClassDetails',
        component: ClassDetails,
    },
    {
        path: '/feats',
        name: 'FeatList',
        component: FeatList,
    },
    {
        path: '/feat/:id',
        name: 'FeatDetails',
        component: FeatDetails,
    },
    {
        path: '/gods',
        name: 'GodList',
        component: GodList,
    },
    {
        path: '/god/:id',
        name: 'GodDetails',
        component: GodDetails,
    },
    {
        path: '/powers',
        name: 'PowerList',
        component: PowerList,
    },
    {
        path: '/power/:id',
        name: 'PowerDetails',
        component: PowerDetails,
    },
    {
        path: '/spells',
        name: 'SpellList',
        component: SpellList,
    },
    {
        path: '/spell/:id',
        name: 'SpellDetails',
        component: SpellDetails,
    },
    {
        path: '/talents',
        name: 'TalentList',
        component: TalentList,
    },
    {
        path: '/talent/:id',
        name: 'TalentDetails',
        component: TalentDetails,
    }
];
