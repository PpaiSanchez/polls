<?php
/**
 * @copyright Copyright (c) 2017 Vinzenz Rosenkranz <vinzenz.rosenkranz@gmail.com>
 *
 * @author Vinzenz Rosenkranz <vinzenz.rosenkranz@gmail.com>
 * @author Kai Schröer <git@schroeer.co>
 *
 * @license GNU AGPL version 3 or any later version
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Polls\Db;

/**
 * @method text getText()
 * @method void setText(text $value)
 * @method string getUserId()
 * @method void setUserId(string $value)
 * @method integer getPollId()
 * @method void setPollId(integer $value)
 * @method integer getType()
 * @method void setType(integer $value)
 */
class ParticipationText extends Model {
	protected $text;
	protected $userId;
	protected $pollId;
	protected $type;

	/**
	 * ParticipationText constructor.
	 */
	public function __construct() {
		$this->addType('pollId', 'integer');
		$this->addType('type', 'integer');
	}
}
