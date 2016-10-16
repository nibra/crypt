<?php
/**
 * Part of the Joomla Framework Crypt Package
 *
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Crypt;

/**
 * Joomla Framework Password Hashing Interface
 *
 * @since       1.0
 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
 */
interface PasswordInterface
{
	/**
	 * Identifier for BCrypt hashed passwords
	 *
	 * @var    string
	 * @since  1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	const BLOWFISH = '$2y$';

	/**
	 * Identifier for legacy Joomla! CMS hashed passwords
	 *
	 * @var    string
	 * @since  1.0
	 * @deprecated  1.3.0
	 */
	const JOOMLA = 'Joomla';

	/**
	 * Identifier for PBKDF2 hashed passwords
	 *
	 * @var    string
	 * @since  1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	const PBKDF = '$pbkdf$';

	/**
	 * Identifier for MD5 hashed passwords
	 *
	 * @var    string
	 * @since  1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	const MD5 = '$1$';

	/**
	 * Creates a password hash
	 *
	 * @param   string  $password  The password to hash.
	 * @param   string  $type      The type of hash. This determines the prefix of the hashing function.
	 *
	 * @return  string  The hashed password.
	 *
	 * @since   1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	public function create($password, $type = null);

	/**
	 * Verifies a password hash
	 *
	 * @param   string  $password  The password to verify.
	 * @param   string  $hash      The password hash to check.
	 *
	 * @return  boolean  True if the password is valid, false otherwise.
	 *
	 * @since   1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	public function verify($password, $hash);

	/**
	 * Sets a default prefix
	 *
	 * @param   string  $type  The prefix to set as default
	 *
	 * @return  void
	 *
	 * @since   1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	public function setDefaultType($type);

	/**
	 * Gets the default type
	 *
	 * @return  void
	 *
	 * @since   1.0
	 * @deprecated  1.3.0  Use PHP 5.5's native password hashing API
	 */
	public function getDefaultType();
}