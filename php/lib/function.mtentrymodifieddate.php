<?php
# Movable Type (r) (C) 2001-2017 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id$

function smarty_function_mtentrymodifieddate($args, &$ctx) {
    $entry = $ctx->stash('entry');
    $args['ts'] = $entry->entry_modified_on;
    $args['ts'] or $args['ts'] = $entry->entry_created_on;
    return $ctx->_hdlr_date($args, $ctx);
}
?>
