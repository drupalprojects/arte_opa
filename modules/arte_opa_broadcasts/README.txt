ARTE OPA Broadcasts
===================

Provides synchronisation with the OPA Broadcasts API.

The synchronisation process is initialised using the `opa-broadcasts-sync` (obs)
drush command. After the broadcast and program data has been fetched from OPA,
`hook_arte_opa_broadcast_sync` gets triggered allowing other modules to carry out
the necessary synchronisation of broadcasts in the system.

## Credits

Development by Marzee Labs, http://marzeelabs.org.

Sponsored by ARTE G.E.I.E.
