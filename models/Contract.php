<?php

namespace StudioDevs\Gwent\Models;

use Lang;
use Model;
use System\Models\File;

/**
 * Contract Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Contract extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'studiodevs_gwent_contracts';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $attachOne = [
        'image' => File::class,
    ];

    public function getFractionOptions(): array
    {
        return [
            'nilfgaard' => 'Nilfgaard',
            'northern_realms' => 'Northern Realms',
            'monsters' => 'Monsters',
            'scoiatael' => "Scoia'tael",
            'skellige' => 'Skellige',
            'syndicate' => 'Syndicate'
        ];
    }

    public function getContractOptions(): array
    {
        if ($this->fraction === 'nilfgaard') {
            return [
                'imprisonment' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.imprisonment'),
                'imperial_formation' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.imperial_formation'),
                'tactical_decision' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.tactical_decision'),
                'toussaintois_hospitality' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.toussaintois_hospitality'),
                'enslave' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.enslave'),
                'double_cross' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.double_cross'),
                'imposter' => Lang::get('studiodevs.gwent::lang.models.contract.nilfgaard.imposter'),
            ];
        }
        elseif ($this->fraction === 'northern_realms') {
            return [
                'inspired_zeal' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.inspired_zeal'),
                'royal_inspiration' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.royal_inspiration'),
                'mobilization' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.mobilization'),
                'shieldwall' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.shieldwall'),
                'stockpile' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.stockpile'),
                'pincer_maneuver' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.pincer_maneuver'),
                'uprising' => Lang::get('studiodevs.gwent::lang.models.contract.northern_realms.uprising'),
            ];
        }
        elseif ($this->fraction === 'monsters') {
            return [
                'carapace' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.carapace'),
                'force_of_nature' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.force_of_nature'),
                'white_frost' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.white_frost'),
                'arachas_swarm' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.arachas_swarm'),
                'fruits_of_ysgith' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.fruits_of_ysgith'),
                'blood_scent' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.blood_scent'),
                'overwhelming_hunger' => Lang::get('studiodevs.gwent::lang.models.contract.monsters.overwhelming_hunger'),
            ];
        }
        elseif ($this->fraction === 'scoiatael') {
            return [
                'guerilla_tactics' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.guerilla_tactics'),
                'invigorate' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.invigorate'),
                'natures_gift' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.natures_gift'),
                'precision_strike' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.precision_strike'),
                'deadeye_ambush' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.deadeye_ambush'),
                'call_of_harmony' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.call_of_harmony'),
                'mahakam_forge' => Lang::get('studiodevs.gwent::lang.models.contract.scoiatael.mahakam_forge'),
            ];
        }
        elseif ($this->fraction === 'skellige') {
            return [
                'onslaught' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.onslaught'),
                'reckless_fury' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.reckless_fury'),
                'battle_trance' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.battle_trance'),
                'rage_of_the_sea' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.rage_of_the_sea'),
                'patricidal_fury' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.patricidal_fury'),
                'ursine_ritual' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.ursine_ritual'),
                'blaze_of_glory' => Lang::get('studiodevs.gwent::lang.models.contract.skellige.blaze_of_glory'),
            ];
        }
        elseif ($this->fraction === 'syndicate') {
            return [
                'blood_money' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.blood_money'),
                'jackpot' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.jackpot'),
                'lined_pockets' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.lined_pockets'),
                'off_the_books' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.off_the_books'),
                'congregate' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.congregate'),
                'pirates_cove' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.pirates_cove'),
                'hidden_cache' => Lang::get('studiodevs.gwent::lang.models.contract.syndicate.hidden_cache'),
            ];
        }
        return [];
    }
}
