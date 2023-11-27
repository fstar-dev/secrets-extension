<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Ambrose Larkin <ambroseLarkin@goldendelta.space>
// SPDX-License-Identifier: AGPL-3.0-or-later
?>
<div class="guest-box" style="display: flex; width: 100%;">
	<div id="secret-root" data-debugsecrets="<?php echo(isset($_['debug']) && $_['debug'] ? "true" : "false")?>"></div>
</div>
