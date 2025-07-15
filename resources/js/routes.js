import ArmorList from './Pages/Armors/ArmorList.vue';
import ClassList from "@/Pages/Classes/ClassList.vue";
import ClassDetails from "@/Pages/Classes/ClassDetails.vue";
import FeatList from './Pages/Feats/FeatList.vue';
import FeatDetails from "@/Pages/Feats/FeatDetails.vue";
import FormulaList from './Pages/Formulas/FormulaList.vue';
import FormulaDetails from "@/Pages/Formulas/FormulaDetails.vue";
import GodList from './Pages/Gods/GodList.vue';
import GodDetails from "@/Pages/Gods/GodDetails.vue";
import PowerList from './Pages/Powers/PowerList.vue';
import PowerDetails from "@/Pages/Powers/PowerDetails.vue";
import SpellList from './Pages/Spells/SpellList.vue';
import SpellDetails from "@/Pages/Spells/SpellDetails.vue";
import TalentList from './Pages/Talents/TalentList.vue';
import TalentDetails from "@/Pages/Talents/TalentDetails.vue";
import ConditionList from "@/Pages/Conditions/ConditionList.vue";
import ConditionDetails from "@/Pages/Conditions/ConditionDetails.vue";
import RaceList from "@/Pages/Races/RaceList.vue";
import RaceDetails from "@/Pages/Races/RaceDetails.vue";
import AlphabetList from "@/Pages/Alphabets/AlphabetList.vue";
import AlphabetDetails from "@/Pages/Alphabets/AlphabetDetails.vue";
import LanguageList from "@/Pages/Languages/LanguageList.vue";
import LanguageDetails from "@/Pages/Languages/LanguageDetails.vue";

export default [
    {
        path: '/alphabets',
        name: 'AlphabetList',
        component: AlphabetList,
    },
    {
        path: '/alphabet/:id',
        name: 'AlphabetDetails',
        component: AlphabetDetails,
    },
    {
        path: '/armors',
        name: 'ArmorList',
        component: ArmorList,
    },
    {
        path: '/armor/:id',
        name: 'ArmorDetails',
        component: ArmorList,
    },
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
        path: '/conditions',
        name: 'ConditionList',
        component: ConditionList,
    },
    {
        path: '/condition/:id',
        name: 'ConditionDetails',
        component: ConditionDetails,
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
        path: '/formulas',
        name: 'FormulaList',
        component: FormulaList,
    },
    {
        path: '/formula/:id',
        name: 'FormulaDetails',
        component: FormulaDetails,
    },
    {
        path: '/gods',
        name: 'GodList',
        component: GodList,
    },
    {
        path: '/god/:godId/pantheon/:pantheonId',
        name: 'GodDetails',
        component: GodDetails,
    },
    {
        path: '/languages',
        name: 'LanguageList',
        component: LanguageList,
    },
    {
        path: '/language/:id',
        name: 'LanguageDetails',
        component: LanguageDetails,
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
        path: '/races',
        name: 'RaceList',
        component: RaceList,
    },
    {
        path: '/race/:id',
        name: 'RaceDetails',
        component: RaceDetails,
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
